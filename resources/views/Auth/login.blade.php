@extends('layout.layout')

@section('title', 'Login Page')


@section('content')
    <div class="min-h-screen w-full relative flex flex-col justify-center items-center overflow-hidden">
        <!-- الصور الخلفية -->
        <img src="{{ asset('images/overlay.png') }}" class="fixed inset-0 w-full h-full object-cover" />
        <img src="{{ asset('images/login.png') }}" class="fixed inset-0 w-full h-full object-cover opacity-100" />

        <div class="relative z-10 max-w-md w-full backdrop-blur-sm p-8 rounded-2xl shadow-xl border border-gray-100"
            style="background-color: rgba(255,255,255,0.75);">

            <h2 class="text-2xl font-bold text-center text-gray-800 mb-2">تسجيل الدخول</h2>
            <p class="text-center text-gray-500 mb-6 text-sm">مرحباً بعودتك. استمر في دعم عطاء وغُيّر حياة الآخرين</p>

            <form id="loginForm" class="space-y-5">
                @csrf

                <!-- البريد الإلكتروني -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">البريد الإلكتروني</label>
                    <div class="relative">
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-3 pr-10 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent transition outline-none"
                            required placeholder="البريد الإلكتروني" />
                        <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14v-2a3 3 0 005.356-2.678M16 11V7a4 4 0 00-8 0v4M5 9h14v2M5 11h14v2" />
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- كلمة المرور -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">كلمة المرور</label>
                    <div class="relative">
                        <input type="password" id="password" name="password"
                            class="w-full px-4 py-3 pr-10 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent transition outline-none"
                            required placeholder="كلمة المرور" />
                        <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 cursor-pointer"
                            id="togglePassword">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </span>
                    </div>
                    <a href="{{ route('forgot-password') }}" class="text-xs text-gray-500 mt-1 block">نسيت كلمة المرور؟</a>
                </div>

                <!-- زر تسجيل الدخول -->
                <button type="submit"
                    class="w-full bg-green-300 text-gray-800 font-semibold py-3 rounded-lg shadow-md hover:bg-green-400 transform hover:-translate-y-0.5 transition duration-200">
                    تسجيل الدخول
                </button>

                <!-- رابط إنشاء حساب -->
                <div class="mt-4 text-center">
                    <a href="{{ route('register') }}"
                        class="inline-block text-gray-600 hover:text-gray-800 font-medium transition">
                        ليس لديك حساب؟ <span class="text-green-600">إنشاء حساب</span>
                    </a>
                </div>

                <!-- رسالة الخطأ -->
                <div id="loginMessage" class="mt-4 text-center text-red-500 text-sm min-h-[1.5rem]"></div>
            </form>
        </div>

    </div>
@endsection


@section('scripts')
    <script>
        const API_KEY = "{{ env('API_KEY') }}";
        const CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').content;

        document.getElementById("loginForm").addEventListener("submit", async function(e) {
            e.preventDefault();

            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const loginMessage = document.getElementById("loginMessage");

            loginMessage.innerHTML = "";
            loginMessage.classList.remove("text-red-500", "text-green-500");

            try {
                const res = await fetch("/api/v1/users/login", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        Accept: "application/json",
                        "x-api-key": API_KEY,
                        "X-CSRF-TOKEN": CSRF_TOKEN,
                    },
                    body: JSON.stringify({
                        email,
                        password
                    }),
                });

                const json = await res.json();

                if (res.ok) {
                    localStorage.setItem("token", json.data.token);
                    localStorage.setItem("userId", json.data.user.id);
                    loginMessage.textContent = "تم تسجيل الدخول بنجاح!";
                    loginMessage.classList.add("text-green-500");
                    setTimeout(() => {
                        if (json.data.user.role === 'admin') {
                            window.location.href = "{{ route('admin.index') }}";
                        } else {
                            window.location.href = "{{ route('home') }}";
                        }
                    }, 500);

                } else {
                    let errorMessage = "";
                    if (json.errors) {
                        const errorList = Object.values(json.errors).flat();
                        errorMessage = errorList.join("<br>");
                    } else if (json.message) {
                        errorMessage = json.message;
                    } else {
                        errorMessage = "فشل تسجيل الدخول. يرجى المحاولة لاحقًا.";
                    }
                    loginMessage.innerHTML = errorMessage;
                    loginMessage.classList.add("text-red-500");
                }
            } catch (err) {
                console.error(err);
                loginMessage.textContent = "حدث خطأ في الاتصال بالخادم";
                loginMessage.classList.add("text-red-500");
            }
        });
        const togglePassword = document.getElementById("togglePassword");
        const passwordInput = document.getElementById("password");

        togglePassword.addEventListener("click", () => {
            const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
            passwordInput.setAttribute("type", type);

            togglePassword.innerHTML = type === "password" ?
                `<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
           </svg>` :
                `<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.956 9.956 0 012.223-3.223M6.1 6.1l11.8 11.8M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
           </svg>`;
        });
    </script>
@endsection
