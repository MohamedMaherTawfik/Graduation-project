@extends('layout.layout')

@section('title', 'Register Page')

@section('content')
    <div class="min-h-screen w-full relative flex flex-col justify-center items-center overflow-hidden">
        <!-- الصور الخلفية -->
        <img src="{{ asset('images/overlay.png') }}" class="fixed inset-0 w-full h-full object-cover" />
        <img src="{{ asset('images/login.png') }}" class="fixed inset-0 w-full h-full object-cover opacity-100" />

        <!-- كارت التسجيل -->
        <div class="relative z-10 max-w-md w-full backdrop-blur-sm p-8 rounded-2xl shadow-xl border border-gray-100"
            style="background-color: rgba(255,255,255,0.75);">

            <h2 class="text-2xl font-bold text-center text-gray-800 mb-2">إنشاء حساب جديد</h2>
            <p class="text-center text-gray-500 mb-6 text-sm">
                انضم إلينا وابدأ رحلتك في دعم عطاء وتغيير حياة الآخرين
            </p>

            <form id="registerForm" class="space-y-5">
                @csrf

                <!-- الاسم -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">الاسم الكامل</label>
                    <input type="text" id="name" name="name"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent transition outline-none"
                        required placeholder="الاسم الكامل" />
                </div>

                <!-- البريد الإلكتروني -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">البريد الإلكتروني</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent transition outline-none"
                        required placeholder="البريد الإلكتروني" />
                </div>

                <!-- كلمة المرور -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">كلمة المرور</label>
                    <input type="password" id="password" name="password"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent transition outline-none"
                        required minlength="8" placeholder="كلمة المرور" />
                </div>

                <!-- تأكيد كلمة المرور -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">
                        تأكيد كلمة المرور
                    </label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent transition outline-none"
                        required placeholder="تأكيد كلمة المرور" />
                </div>

                <!-- زر إنشاء الحساب -->
                <button type="submit"
                    class="w-full bg-green-300 text-gray-800 font-semibold py-3 rounded-lg shadow-md hover:bg-green-400 transform hover:-translate-y-0.5 transition duration-200">
                    إنشاء الحساب
                </button>

                <!-- رابط تسجيل الدخول -->
                <div class="mt-4 text-center">
                    <a href="{{ route('login') }}"
                        class="inline-block text-gray-600 hover:text-gray-800 font-medium transition">
                        لديك حساب بالفعل؟
                        <span class="text-green-600">تسجيل الدخول</span>
                    </a>
                </div>

                <!-- رسالة -->
                <div id="registerMessage" class="mt-4 text-center text-red-500 text-sm min-h-[1.5rem]"></div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const API_KEY = 'sk_test_9fA3KxP2QmL7ZC8R4WbE1N6YHVDuT0J';

        document.getElementById('registerForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const data = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                password: document.getElementById('password').value,
                password_confirmation: document.getElementById('password_confirmation').value
            };

            const messageEl = document.getElementById('registerMessage');
            messageEl.textContent = '';
            messageEl.className = "mt-4 text-center text-red-500 text-sm min-h-[1.5rem]";

            if (data.password !== data.password_confirmation) {
                messageEl.textContent = "كلمتا المرور غير متطابقتين";
                return;
            }

            try {
                const res = await fetch('/api/v1/users/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'x-api-key': API_KEY
                    },
                    body: JSON.stringify(data)
                });

                const json = await res.json();

                if (res.ok) {
                    localStorage.setItem('token', json.data.token);
                    messageEl.textContent = "تم إنشاء الحساب بنجاح!";
                    messageEl.className = "mt-4 text-center text-green-500 text-sm min-h-[1.5rem]";
                    setTimeout(() => {
                        window.location.href = "{{ route('home') }}";
                    }, 1000);
                } else {
                    if (json.errors) {
                        const firstError = Object.values(json.errors)[0]?.[0] || "حدث خطأ في التسجيل";
                        messageEl.textContent = firstError;
                    } else {
                        messageEl.textContent = json.message || "فشل إنشاء الحساب";
                    }
                }
            } catch (err) {
                console.error(err);
                messageEl.textContent = "فشل الاتصال بالخادم";
            }
        });
    </script>
@endsection
