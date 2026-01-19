@extends('layout.layout')
@section('title', 'About us Page')
@section('nav')
    @include('components.extendable-nav')
@endsection
<style>
    .big-number {
        font-size: 6rem;
        /* صغير على الموبايل */
        font-weight: 800;
        color: #16a34a;
        /* green-600 */
    }

    @media (min-width: 768px) {
        .big-number {
            font-size: 4rem;
        }

        /* md */
    }

    @media (min-width: 1024px) {
        .big-number {
            font-size: 4rem;
        }

        /* lg */
    }
</style>
@section('content')
    <div class="container mx-auto px-4 py-12 md:py-16 lg:py-20 max-w-7xl">
        <div class="flex flex-col items-center justify-center mb-10 md:mb-14 text-center">
            <!-- العنوان -->
            <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                رسالتنا
            </h3>

            <!-- الخط الأخضر -->
            <div class="w-32 h-1 bg-green-600/70 rounded mb-4"></div>

            <!-- hr تحته -->
            <hr class="w-30 border-gray-700 mx-auto">
        </div>


        <!-- رؤيتنا + رسالتنا + كارت ثالث -->
        <div class="grid grid-cols-1 mt-5 md:grid-cols-3 gap-6 lg:gap-8 mb-16 lg:mb-20">

            <!-- الكارت الأيسر -->
            <div
                class="bg-white rounded-2xl border border-black shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300 p-6 text-center">
                <div class="flex flex-col items-center mb-4">

                    <i class="fa-regular fa-circle-question fa-6x text-green-700 mb-4"></i>
                    <hr class="w-full border-gray-500 mb-4">
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-2">رؤيتنا</h3>
                <p class="text-gray-600 text-lg leading-relaxed">
                    بناء مجتمع خالٍ من الجوع، يتمتع فيه الجميع بفرص متساوية للحصول على الغذاء.
                </p>
            </div>

            <!-- الكارت الأوسط (صورة فوق الكلام) -->
            <div
                class="bg-white rounded-2xl border border-black shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300 p-4 text-center">
                <div class="mb-4">
                    <img src="{{ asset('images/about.png') }}" alt="توزيع غذاء للعائلات"
                        class="w-full h-40 object-cover rounded-xl mb-4 hover:scale-105 transition-transform duration-500">
                </div>
                {{-- <h3 class="text-lg font-bold text-gray-800 mb-2">الكارت الأوسط</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    هذا الكارت يعرض صورة فوق الكلام ليكون مميزاً عن الآخرين.
                </p> --}}
            </div>

            <!-- الكارت الأيمن -->
            <div
                class="bg-white rounded-2xl border border-black shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300 p-6 text-center">
                <div class="flex flex-col items-center mb-4">
                    <i class="fa-solid fa-hands-holding-circle fa-6x text-green-700 mb-4"></i>
                    <hr class="w-full border-gray-500 mb-4">
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-2">رسالتنا</h3>
                <p class="text-gray-600 text-lg leading-relaxed">
                    توفير الغذاء الصحي والمستدام للأسر المحتاجة، من خلال برامج دعم مجتمعي.
                </p>
            </div>

        </div>


        <!-- قيمنا الأساسية -->
        <div class="text-center mt-10 mb-12 md:mb-16">
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900">قيمنا الأساسية</h3>
            <hr class="w-30 border-gray-700 mx-auto mt-6">

        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
            <div class="bg-white p-8 rounded-2xl shadow-md text-center hover:shadow-lg transition-shadow">
                <i class="fa-solid fa-hands-holding-circle fa-6x text-green-700 mb-4"></i>
                <hr>
                <h4 class="text-3xl font-bold text-gray-800 mb-3 mt-5">التعاطف</h4>
                <p class="text-gray-600 text-lg">نعمل بروح التعاطف والتكافل مع كل فرد.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-md text-center hover:shadow-lg transition-shadow">
                <i class="fa-solid fa-arrows-spin fa-6x text-grey-700 mb-4"></i>
                <hr>
                <h4 class="text-3xl font-bold text-gray-800 mb-3 mt-5">الاستدامة</h4>
                <p class="text-gray-600 text-lg">نسعى لحلول غذائية مستدامة للأمد الطويل.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-md text-center hover:shadow-lg transition-shadow">
                <i class="fa-solid fa-book-open fa-6x text-grey-700 mb-4"></i>
                <hr>
                <h4 class="text-3xl font-bold text-gray-800 mb-3 mt-5">الشفافية</h4>
                <p class="text-gray-600 text-lg">نلتزم بأعلى معايير الشفافية في أعمالنا جميعًا.</p>
            </div>
        </div>

        <div class="bg-green-50/70 py-12 mt-15 md:py-16">
            <div class="container mx-auto px-6 max-w-6xl">
                <div class="flex flex-col items-center justify-center mb-10 md:mb-14 text-center">
                    <!-- العنوان -->
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        أثرنا المجتمعي
                    </h3>

                    <!-- الخط الأخضر -->
                    <div class="w-32 h-1 bg-green-600/70 rounded mb-4"></div>

                    <!-- hr تحته -->
                    <hr class="w-30 border-gray-700 mx-auto">
                </div>

                <!-- الإحصائيات -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 justify-items-center mb-16">
                    <!-- مدينة -->
                    <div class="flex flex-col items-center text-center">
                        <div class="flex items-center gap-4 mb-3">
                            <span class="big-number">+20</span>
                            <div
                                class="w-20 h-20 md:w-24 md:h-24 rounded-full bg-green-600 flex items-center justify-center text-white">
                                <!-- أيقونة Font Awesome -->
                                <i class="fas fa-map-marker-alt text-2xl md:text-3xl lg:text-4xl"></i>
                            </div>
                        </div>
                        <p class="text-4xl md:text-5xl font-medium text-gray-700">مدينة</p>
                    </div>

                    <!-- شريك -->
                    <div class="flex flex-col items-center text-center">
                        <div class="flex items-center gap-4 mb-3">
                            <span class="big-number">+100</span>
                            <div
                                class="w-20 h-20 md:w-24 md:h-24 rounded-full bg-green-600 flex items-center justify-center text-white">
                                <!-- أيقونة Font Awesome -->
                                <i class="fas fa-users text-2xl md:text-3xl lg:text-4xl"></i>
                            </div>
                        </div>
                        <p class="text-4xl md:text-5xl font-medium text-gray-700">شريك</p>
                    </div>

                    <!-- سنوات خبرة -->
                    <div class="flex flex-col items-center text-center">
                        <div class="flex items-center gap-4 mb-3">
                            <span class="big-number">+5</span>
                            <div
                                class="w-20 h-20 md:w-24 md:h-24 rounded-full bg-green-600 flex items-center justify-center text-white">
                                <!-- أيقونة Font Awesome -->
                                <i class="fas fa-clock text-2xl md:text-3xl lg:text-4xl"></i>
                            </div>
                        </div>
                        <p class="text-4xl md:text-5xl font-medium text-gray-700">سنوات خبرة</p>
                    </div>
                </div>




            </div>
        </div>

    </div>
@endsection
@section('footer')
    @include('components.footer')
@endsection
