@extends('layout.layout')
@section('title', 'donate Page')
@section('nav')
    @include('components.extendable-nav')
@endsection
@section('content')
    <section class="bg-gradient-to-b from-green-50 to-white py-12 px-4">
        <div class="max-w-5xl mx-auto">

            <!-- الخطوات الثلاث -->
            <div class="relative">
                <!-- السهام -->
                <div
                    class="hidden md:block absolute top-1/2 left-1/3 -translate-y-1/2 text-green-500 text-4xl font-bold z-10">
                    ←
                </div>
                <div
                    class="hidden md:block absolute top-1/2 right-1/3 -translate-y-1/2 text-green-500 text-4xl font-bold z-10 rotate-180">
                    ←
                </div>

                <div class="grid md:grid-cols-3 gap-6 md:gap-4 relative z-20">

                    <!-- الخطوة 1 -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 text-center border-2 border-green-100 hover:border-green-400 transition-all relative">
                        <!-- الرقم فوق البوردر -->
                        <div
                            class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-green-600 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-lg z-10">
                            1
                        </div>
                        <!-- الصورة بدل الأيقونة -->
                        <div class="w-35 h-30 mx-auto mb-4 rounded-full overflow-hidden">
                            <img src="{{ asset('images/1.png') }}" alt="Step 1" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">اختر وجهة تبرعك</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            تصفح قائمة الجمعيات الخيرية أو المنظمات المتاحة واختر الجهة المناسبة لك.
                        </p>
                    </div>

                    <!-- الخطوة 2 -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 text-center border-2 border-green-100 hover:border-green-400 transition-all relative">
                        <!-- الرقم فوق البوردر -->
                        <div
                            class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-green-600 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-lg z-10">
                            2
                        </div>
                        <!-- الصورة بدل الأيقونة -->
                        <div class="w-35 h-30 mx-auto mb-4 rounded-full overflow-hidden">
                            <img src="{{ asset('images/2.png') }}" alt="Step 2" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">حدد نوع وقيمة التبرع</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            اختر نوع التبرع المالي أو العيني (طعام، ملابس، أدوية...) وحدد الكمية التي ترغب في تقديمها.
                        </p>
                    </div>

                    <!-- الخطوة 3 -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 text-center border-2 border-green-100 hover:border-green-400 transition-all relative">
                        <!-- الرقم فوق البوردر -->
                        <div
                            class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-green-600 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-lg z-10">
                            3
                        </div>
                        <!-- الصورة بدل الأيقونة -->
                        <div class="w-35 h-30 mx-auto mb-4 rounded-full overflow-hidden">
                            <img src="{{ asset('images/3.png') }}" alt="Step 3" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">تبرعك يصنع الأثر</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            نقوم بإيصال تبرعك للمستفيدين مباشرة ويمكنك متابعة أثر تبرعك تقريبًا.
                        </p>
                    </div>

                </div>


            </div>

            <!-- النص التحفيزي -->
            <div class="text-center mt-10 mb-8">
                <p class="text-2xl md:text-3xl font-bold text-gray-800">
                    بـخطوات بسيطة... تصنع فرقًا كبيرًا
                </p>
            </div>

            <!-- زر التبرع -->
            <div class="text-center">
                <button
                    class="bg-green-600 hover:bg-green-700 text-white font-bold py-5 px-12 rounded-full text-xl shadow-lg transform hover:scale-105 transition-all duration-300">
                    ابدأ التبرع الآن
                </button>
            </div>

            <!-- الأسئلة الشائعة -->
            <div class="mt-16 max-w-3xl mx-auto">
                <h3 class="text-2xl font-bold text-center text-gray-800 mb-8">الأسئلة الشائعة</h3>

                <div class="space-y-4">
                    <details class="bg-white rounded-xl shadow-sm">
                        <summary class="font-medium cursor-pointer p-5 text-lg flex justify-between items-center">
                            <span>هل التبرع آمن؟</span>
                            <span class="text-green-600 text-xl">▼</span>
                        </summary>
                        <div class="px-5 pb-5 text-gray-600">
                            نعم، نحرص على تأمين جميع عمليات التبرع بالكامل وضمان الشفافية التامة.
                        </div>
                    </details>

                    <details class="bg-white rounded-xl shadow-sm">
                        <summary class="font-medium cursor-pointer p-5 text-lg flex justify-between items-center">
                            <span>كيف يتم توزيع الطعام؟</span>
                            <span class="text-green-600 text-xl">▼</span>
                        </summary>
                        <div class="px-5 pb-5 text-gray-600">
                            يتم توزيع التبرعات العينية بواسطة شركاء موثوقين مع توثيق عملية التوزيع بالصور والفيديو عند
                            الإمكان.
                        </div>
                    </details>

                    <details class="bg-white rounded-xl shadow-sm">
                        <summary class="font-medium cursor-pointer p-5 text-lg flex justify-between items-center">
                            <span>كيف أتابع أثر تبرعي؟</span>
                            <span class="text-green-600 text-xl">▼</span>
                        </summary>
                        <div class="px-5 pb-5 text-gray-600">
                            بعد التبرع ستتلقى تقريرًا مبسطًا يوضح كيف تم استخدام تبرعك مع إمكانية متابعة التأثير بشكل دوري.
                        </div>
                    </details>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection
