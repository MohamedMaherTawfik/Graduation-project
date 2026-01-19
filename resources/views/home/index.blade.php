@extends('layout.layout')

@section('title', 'Home Page')

@section('nav')
    @include('components.navbar')
@endsection

@section('content')

    <!-- Section: شركاؤنا في الخير -->
    <section class="py-12 px-4 md:px-8 lg:px-16 relative mt-8">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-8">شركاؤنا في الخير</h2>

        <!-- Cards Row with Arrows -->
        <div class="relative">
            <!-- Left Arrow -->
            <button
                class="absolute -left-6 top-1/2 transform -translate-y-1/2 w-14 h-14 flex items-center justify-center rounded-full border-2 border-green-900 text-green-900 hover:bg-green-900 hover:text-white hover:scale-110 transition-all shadow-lg z-10">
                <i class="fas fa-chevron-left text-xl"></i>
            </button>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Card 1 -->
                <div
                    class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="text-green-700 mb-6">
                        <i class="fas fa-users fa-4x"></i>
                    </div>
                    <h3 class="font-bold text-2xl mb-2">بيت الطعام الخيري</h3>
                    <p class="text-md text-gray-600 mb-4">طعام وعروض عائلية تُوزّع بانتظام</p>
                    <a href="#" class="text-blue-600 text-md font-medium hover:underline">المزيد ←</a>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="text-blue-600 mb-6">
                        <i class="fa-solid fa-hands-holding-circle fa-4x text-green-700"></i>
                    </div>
                    <h3 class="font-bold text-2xl mb-2">جمعية الأيتام المتعاطفة</h3>
                    <p class="text-md text-gray-600 mb-4">دعم الأسر المحتاجة وبناء منازل</p>
                    <a href="#" class="text-blue-600 text-md font-medium hover:underline">المزيد ←</a>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="text-red-600 mb-6">
                        <i class="fa-solid fa-hand-holding-heart fa-4x text-green-700"></i>
                    </div>
                    <h3 class="font-bold text-2xl mb-2">جمعية الرحمة</h3>
                    <p class="text-md text-gray-600 mb-4">لتحقيق أحلام الأطفال المرضى</p>
                    <a href="#" class="text-blue-600 text-md font-medium hover:underline">المزيد ←</a>
                </div>
            </div>

            <!-- Right Arrow -->
            <button
                class="absolute -right-6 top-1/2 transform -translate-y-1/2 w-14 h-14 flex items-center justify-center rounded-full border-2 border-green-900 text-green-900 hover:bg-green-900 hover:text-white hover:scale-110 transition-all shadow-lg z-10">
                <i class="fas fa-chevron-right text-xl"></i>
            </button>
        </div>

        <!-- Pagination Dots -->
        <div class="flex justify-center mt-4 space-x-2">
            <div class="w-3 h-3 rounded-full bg-green-900 hover:bg-green-700 cursor-pointer transition-all"></div>
            <div class="w-3 h-3 rounded-full bg-green-400 hover:bg-green-600 cursor-pointer transition-all"></div>
            <div class="w-3 h-3 rounded-full bg-green-400 hover:bg-green-600 cursor-pointer transition-all"></div>
        </div>
    </section>

    <!-- Section: الشفافية والتأثير -->
    <section class="py-12 px-4 md:px-8 lg:px-16 mt-8">
        <div class="flex justify-center items-center mb-8">
            <h2 class="text-2xl md:text-3xl font-bold justify-center items-center">الشفافية والتأثير</h2>
        </div>

        <!-- Stats Row -->
        <div class="flex flex-col md:flex-row items-center justify-around gap-6">

            <!-- Stat 1 -->
            <div class="flex flex-col items-center text-center w-full md:w-auto">
                <div class="text-green-700 mb-4">
                    <i class="fas fa-hands-helping fa-5x"></i>
                </div>
                <p class="text-xl font-bold leading-relaxed">
                    مجمع داعم يضم أكثر<br>
                    من 50,000 متبرع ومتطوع.
                </p>
            </div>

            <!-- Vertical Divider -->
            <div class="hidden md:block w-1 h-50 bg-black mx-4"></div>

            <!-- Stat 2 -->
            <div class="flex flex-col items-center text-center w-full md:w-auto">
                <div class="text-green-700 mb-4">
                    <i class="fas fa-utensils fa-5x"></i>
                </div>
                <p class="text-xl font-bold leading-relaxed">
                    أكثر من 10,000 وجبة<br>
                    تم توزيعها
                </p>
            </div>

            <!-- Vertical Divider -->
            <div class="hidden md:block w-1 h-50 bg-black mx-4"></div>

            <!-- Stat 3 -->
            <div class="flex flex-col items-center text-center w-full md:w-auto">
                <div class="text-green-700 mb-4">
                    <i class="fas fa-check-circle fa-5x"></i>
                </div>
                <p class="text-xl font-bold leading-relaxed">
                    %100 نظام وصول<br>
                    من تبرعك للمستفيدين
                </p>
            </div>

        </div>

    </section>

    <!-- قسم أحدث الأخبار والقصص -->
    <section class="py-12 md:py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 md:mb-14 text-gray-800">
                أحدث الأخبار والقصص
            </h2>

            <div class="relative max-w-6xl mx-auto">
                <!-- الكروت -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                    <!-- الكارت الأول -->
                    <div
                        class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 border border-gray-100">
                        <div class="relative h-64 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1606857521015-7f9fcf423740?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80"
                                alt="عائلة تأكل معاً"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        </div>
                        <div class="p-6 md:p-8">
                            <h3 class="text-xl md:text-2xl font-bold mb-4 text-gray-800">
                                حملة: الشتاء... دفء وغذاء
                            </h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                نجحنا بفضل دعمكم في الوصول إلى 5000 أسرة محتاجة، وتوفير السلال الغذائية...
                            </p>
                            <a href="#" class="text-emerald-600 font-medium hover:text-emerald-700 transition">
                                اقرأ المزيد →
                            </a>
                        </div>
                    </div>

                    <!-- الكارت الثاني -->
                    <div
                        class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 border border-gray-100">
                        <div class="relative h-64 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80"
                                alt="توزيع مساعدات"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        </div>
                        <div class="p-6 md:p-8">
                            <h3 class="text-xl md:text-2xl font-bold mb-4 text-gray-800">
                                افتتاح مطبخ خيري جديد
                            </h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                تم افتتاح مطبخ خيري جديد في [المنطقة] يقدم يومياً أكثر من 1000 وجبة...
                            </p>
                            <a href="#" class="text-emerald-600 font-medium hover:text-emerald-700 transition">
                                اقرأ المزيد →
                            </a>
                        </div>
                    </div>
                </div>
                <button
                    class="absolute -left-6 top-1/2 transform -translate-y-1/2 w-14 h-14 flex items-center justify-center rounded-full border-2 border-green-700 text-green-700 hover:bg-green-900 hover:text-white hover:scale-110 transition-all shadow-lg z-10">
                    <i class="fas fa-chevron-left text-xl"></i>
                </button>

                <button
                    class="absolute -right-6 top-1/2 transform -translate-y-1/2 w-14 h-14 flex items-center justify-center rounded-full border-2 border-green-700 text-green-700 hover:bg-green-900 hover:text-white hover:scale-110 transition-all shadow-lg z-10">
                    <i class="fas fa-chevron-right text-xl"></i>
                </button>
            </div>
        </div>
    </section>


@endsection

@section('footer')
    @include('components.footer')
@endsection
@section('scripts')

@endsection
