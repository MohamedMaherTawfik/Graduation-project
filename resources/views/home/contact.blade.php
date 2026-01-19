@extends('layout.layout')
@section('title', 'contact Page')
@section('nav')
    @include('components.extendable-nav')
@endsection
<style>
    body {
        font-family: 'Cairo', sans-serif;
    }

    /* RTL Support */
    [dir="rtl"] {
        direction: rtl;
        text-align: right;
    }

    [dir="rtl"] .mr-2 {
        margin-right: 0 !important;
        margin-left: 0.5rem !important;
    }

    [dir="rtl"] .mr-4 {
        margin-right: 0 !important;
        margin-left: 1rem !important;
    }

    [dir="rtl"] .space-x-4>*+* {
        margin-left: 0 !important;
        margin-right: 1rem !important;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.5s ease-out forwards;
    }
</style>
@section('content')

    <section class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- العنوان -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-green-800 mb-4">تواصل معنا</h2>
                <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                    نحن هنا للرد على جميع استفساراتكم ومساعدتكم في كل ما تحتاجونه
                </p>
            </div>

            <!-- محتوى الاتصال -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">

                <div class="grid grid-cols-1 md:grid-cols-2">
                    <!-- معلومات التواصل -->
                    <div class="bg-green-800 p-8 text-white md:order-2">
                        <h3 class="text-xl font-bold mb-6">معلومات الاتصال</h3>

                        <div class="space-y-5">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-semibold">العنوان</h4>
                                    <p class="text-sm opacity-80">شارع النيل، القاهرة، مصر</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-phone-alt mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-semibold">الهاتف</h4>
                                    <p class="text-sm opacity-80">+20 123 456 789</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-envelope mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-semibold">البريد الإلكتروني</h4>
                                    <p class="text-sm opacity-80">info@example.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <h4 class="font-semibold mb-3">تابعنا على</h4>
                            <div class="flex space-x-4">
                                <a href="#" target="_blank"
                                    class="w-10 h-10 rounded-full bg-white text-green-800 flex items-center justify-center hover:bg-green-100 transition">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank"
                                    class="w-10 h-10 rounded-full bg-white text-green-800 flex items-center justify-center hover:bg-green-100 transition">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" target="_blank"
                                    class="w-10 h-10 rounded-full bg-white text-green-800 flex items-center justify-center hover:bg-green-100 transition">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" target="_blank"
                                    class="w-10 h-10 rounded-full bg-white text-green-800 flex items-center justify-center hover:bg-green-100 transition">
                                    <i class="fab fa-telegram-plane"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- نموذج المراسلة -->
                    <div class="p-8 md:order-1">
                        <h3 class="text-xl font-bold text-black mb-6">أرسل لنا رسالة</h3>
                        <form method="POST" action="#" class="space-y-5">
                            @csrf

                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">الاسم
                                    الكامل</label>
                                <input type="text" id="name" name="name"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-800"
                                    placeholder="أدخل اسمك الكامل" required>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">البريد
                                    الإلكتروني</label>
                                <input type="email" id="email" name="user_email"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-800"
                                    placeholder="أدخل بريدك الإلكتروني" required>
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">الموضوع</label>
                                <input type="text" id="subject" name="subject"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-800"
                                    placeholder="أدخل موضوع الرسالة" required>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">الرسالة</label>
                                <textarea id="message" name="message" rows="4"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-800"
                                    placeholder="أدخل رسالتك" required></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-green-800 text-white py-3 rounded-md font-medium hover:bg-green-900 transition">
                                إرسال
                            </button>
                        </form>

                        {{-- <div class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md">
                            <i class="fas fa-check-circle mr-2"></i>
                            <span>تم إرسال الرسالة بنجاح!</span>
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')
    @include('components.footer')
@endsection
