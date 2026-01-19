@extends('layout.layout')
@section('title', 'partners Page')
@section('nav')
    @include('components.extendable-nav')
@endsection
@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <!-- البحث + التبويبات -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-5 mb-10">
            <div class="relative w-full max-w-md">
                <input type="text" placeholder="ابحث"
                    class="w-full py-3.5 pr-5 pl-11 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 text-right" />
                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <div class="flex flex-wrap justify-center gap-2.5">
                <button class="px-6 py-2.5 rounded-full bg-gray-100 hover:bg-gray-200 transition font-medium">تميمه
                    مستدامة</button>
                <button class="px-6 py-2.5 rounded-full bg-gray-100 hover:bg-gray-200 transition font-medium">إطعام
                    الإطفال</button>
                <button class="px-6 py-2.5 rounded-full bg-gray-100 hover:bg-gray-200 transition font-medium">علاجه</button>
                <button
                    class="px-7 py-2.5 rounded-full bg-green-600 text-white hover:bg-green-700 transition font-medium">الكل</button>
            </div>
        </div>

        <!-- الكروت -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

            <!-- كارت 1 -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100/80">
                <div class="p-7 flex flex-col items-center text-center">
                    <div
                        class="w-20 h-20 rounded-full bg-green-50 flex items-center justify-center mb-5 text-4xl shadow-sm">
                        ❤️🌱
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">سنابل الخير</h3>
                    <p class="text-gray-600 text-sm mb-6 min-h-[48px]">
                        تمويل الجمعيات وتنمية المجتمع
                    </p>
                    <div class="flex gap-4 w-full justify-center">
                        <button
                            class="flex-1 py-2.5 px-6 bg-green-600 hover:bg-green-700 text-white rounded-full font-medium transition text-sm">تبرع</button>
                        <button
                            class="flex-1 py-2.5 px-6 border-2 border-green-600 text-green-600 hover:bg-green-50 rounded-full font-medium transition text-sm">تفاصيل</button>
                    </div>
                </div>
            </div>

            <!-- كارت 2 -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100/80">
                <div class="p-7 flex flex-col items-center text-center">
                    <div
                        class="w-20 h-20 rounded-full bg-green-50 flex items-center justify-center mb-5 text-4xl shadow-sm">
                        🌾🍲
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">بنك الطعام</h3>
                    <p class="text-gray-600 text-sm mb-6 min-h-[48px]">
                        جمع وتوزيع الطعام الفائض على المحتاجين
                    </p>
                    <div class="flex gap-4 w-full justify-center">
                        <button
                            class="flex-1 py-2.5 px-6 bg-green-600 hover:bg-green-700 text-white rounded-full font-medium transition text-sm">تبرع</button>
                        <button
                            class="flex-1 py-2.5 px-6 border-2 border-green-600 text-green-600 hover:bg-green-50 rounded-full font-medium transition text-sm">تفاصيل</button>
                    </div>
                </div>
            </div>

            <!-- كارت 3 -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100/80">
                <div class="p-7 flex flex-col items-center text-center">
                    <div
                        class="w-20 h-20 rounded-full bg-green-50 flex items-center justify-center mb-5 text-4xl shadow-sm">
                        🏥💉
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">مستشفى الخير</h3>
                    <p class="text-gray-600 text-sm mb-6 min-h-[48px]">
                        توفير الرعاية الصحية للمحتاجين
                    </p>
                    <div class="flex gap-4 w-full justify-center">
                        <button
                            class="flex-1 py-2.5 px-6 bg-green-600 hover:bg-green-700 text-white rounded-full font-medium transition text-sm">تبرع</button>
                        <button
                            class="flex-1 py-2.5 px-6 border-2 border-green-600 text-green-600 hover:bg-green-50 rounded-full font-medium transition text-sm">تفاصيل</button>
                    </div>
                </div>
            </div>

            <!-- كارت 4 -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100/80">
                <div class="p-7 flex flex-col items-center text-center">
                    <div
                        class="w-20 h-20 rounded-full bg-green-50 flex items-center justify-center mb-5 text-4xl shadow-sm">
                        📚✏️
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">مكتبة الخير</h3>
                    <p class="text-gray-600 text-sm mb-6 min-h-[48px]">
                        دعم التعليم وتوفير الكتب للطلاب
                    </p>
                    <div class="flex gap-4 w-full justify-center">
                        <button
                            class="flex-1 py-2.5 px-6 bg-green-600 hover:bg-green-700 text-white rounded-full font-medium transition text-sm">تبرع</button>
                        <button
                            class="flex-1 py-2.5 px-6 border-2 border-green-600 text-green-600 hover:bg-green-50 rounded-full font-medium transition text-sm">تفاصيل</button>
                    </div>
                </div>
            </div>

            <!-- كارت 5 -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100/80">
                <div class="p-7 flex flex-col items-center text-center">
                    <div
                        class="w-20 h-20 rounded-full bg-green-50 flex items-center justify-center mb-5 text-4xl shadow-sm">
                        🏡💛
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">مأوى الأمل</h3>
                    <p class="text-gray-600 text-sm mb-6 min-h-[48px]">
                        توفير المأوى للمشردين والأسر المحتاجة
                    </p>
                    <div class="flex gap-4 w-full justify-center">
                        <button
                            class="flex-1 py-2.5 px-6 bg-green-600 hover:bg-green-700 text-white rounded-full font-medium transition text-sm">تبرع</button>
                        <button
                            class="flex-1 py-2.5 px-6 border-2 border-green-600 text-green-600 hover:bg-green-50 rounded-full font-medium transition text-sm">تفاصيل</button>
                    </div>
                </div>
            </div>

            <!-- كارت 6 -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100/80">
                <div class="p-7 flex flex-col items-center text-center">
                    <div
                        class="w-20 h-20 rounded-full bg-green-50 flex items-center justify-center mb-5 text-4xl shadow-sm">
                        🌿💧
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">مشروع المياه</h3>
                    <p class="text-gray-600 text-sm mb-6 min-h-[48px]">
                        توفير مياه صالحة للشرب في المناطق النائية
                    </p>
                    <div class="flex gap-4 w-full justify-center">
                        <button
                            class="flex-1 py-2.5 px-6 bg-green-600 hover:bg-green-700 text-white rounded-full font-medium transition text-sm">تبرع</button>
                        <button
                            class="flex-1 py-2.5 px-6 border-2 border-green-600 text-green-600 hover:bg-green-50 rounded-full font-medium transition text-sm">تفاصيل</button>
                    </div>
                </div>
            </div>

            <!-- كارت 7 -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100/80">
                <div class="p-7 flex flex-col items-center text-center">
                    <div
                        class="w-20 h-20 rounded-full bg-green-50 flex items-center justify-center mb-5 text-4xl shadow-sm">
                        👩‍⚕️🧑‍⚕️
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">عيادة الخير</h3>
                    <p class="text-gray-600 text-sm mb-6 min-h-[48px]">
                        توفير الخدمات الطبية المجانية للمرضى
                    </p>
                    <div class="flex gap-4 w-full justify-center">
                        <button
                            class="flex-1 py-2.5 px-6 bg-green-600 hover:bg-green-700 text-white rounded-full font-medium transition text-sm">تبرع</button>
                        <button
                            class="flex-1 py-2.5 px-6 border-2 border-green-600 text-green-600 hover:bg-green-50 rounded-full font-medium transition text-sm">تفاصيل</button>
                    </div>
                </div>
            </div>

            <!-- كارت 8 -->
            <div
                class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100/80">
                <div class="p-7 flex flex-col items-center text-center">
                    <div
                        class="w-20 h-20 rounded-full bg-amber-50 flex items-center justify-center mb-5 text-4xl shadow-sm">
                        🎒📖
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">مبادرة التعليم</h3>
                    <p class="text-gray-600 text-sm mb-6 min-h-[48px]">
                        دعم التعليم للأطفال ومحو الأمية
                    </p>
                    <div class="flex gap-4 w-full justify-center">
                        <button
                            class="flex-1 py-2.5 px-6 bg-green-600 hover:bg-green-700 text-white rounded-full font-medium transition text-sm">تبرع</button>
                        <button
                            class="flex-1 py-2.5 px-6 border-2 border-green-600 text-green-600 hover:bg-green-50 rounded-full font-medium transition text-sm">تفاصيل</button>
                    </div>
                </div>
            </div>

        </div>


        <!-- الترقيم -->
        <div class="flex justify-center items-center gap-4 mt-12">
            <button class="px-5 py-2.5 rounded-lg bg-gray-100 hover:bg-gray-200 transition">السابق</button>

            <div class="flex gap-2">
                <button class="px-5 py-2.5 rounded-lg bg-green-600 text-white">1</button>
                <button class="px-5 py-2.5 rounded-lg bg-gray-100 hover:bg-gray-200 transition">2</button>
                <button class="px-5 py-2.5 rounded-lg bg-gray-100 hover:bg-gray-200 transition">3</button>
                <button class="px-5 py-2.5 rounded-lg bg-gray-100 hover:bg-gray-200 transition">...</button>
            </div>

            <button class="px-5 py-2.5 rounded-lg bg-gray-100 hover:bg-gray-200 transition">التالي</button>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection
