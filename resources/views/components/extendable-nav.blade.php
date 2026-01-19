<section class=" px-4 md:px-12" style="background-color: rgba(19, 122, 19, 0.226)">
    <!-- Header -->
    <header
        class="bg-white/95 backdrop-blur-sm shadow-lg mt-8 md:mx-20 rounded-3xl
               border border-white/30">
        <div class="md:px-12 flex justify-between items-center" dir="rtl">

            <!-- اللوجو -->
            <div class="flex items-center">
                <img src="{{ asset('images/logo 3.png') }}" alt="Logo"
                    class="w-16 md:w-20 h-auto rounded-full object-cover">
            </div>

            <!-- الروابط -->
            <nav class="hidden md:flex flex-1 justify-center">
                <div class="flex gap-6 lg:gap-8 text-gray-800 text-base lg:text-lg font-medium">
                    <a href="{{ route('home') }}"
                        class="relative group transition-all hover:text-emerald-700
                        {{ request()->routeIs('home') ? 'font-bold text-emerald-700' : '' }}">
                        الرئيسية
                        <span
                            class="absolute right-0 bottom-0 h-0.5 bg-emerald-600 transition-all w-0 group-hover:w-full"></span>
                    </a>

                    <a href="{{ route('who') }}"
                        class="relative group transition-all hover:text-emerald-700
                        {{ request()->routeIs('who') ? 'font-bold text-emerald-700' : '' }}">
                        من نحن
                        <span
                            class="absolute right-0 bottom-0 h-0.5 bg-emerald-600 transition-all
                            {{ request()->routeIs('who') ? 'w-full' : 'w-0 group-hover:w-full' }}">
                        </span>
                    </a>

                    <a href="{{ route('partners') }}"
                        class="relative group transition-all hover:text-emerald-700
                        {{ request()->routeIs('partners') ? 'font-bold text-emerald-700' : '' }}">
                        شركاؤنا
                        <span
                            class="absolute right-0 bottom-0 h-0.5 bg-emerald-600 transition-all
                            {{ request()->routeIs('partners') ? 'w-full' : 'w-0 group-hover:w-full' }}">
                        </span>
                    </a>

                    <a href="{{ route('donate') }}"
                        class="relative group transition-all hover:text-emerald-700
                        {{ request()->routeIs('donate') ? 'font-bold text-emerald-700' : '' }}">
                        طريقة التبرع
                        <span
                            class="absolute right-0 bottom-0 h-0.5 bg-emerald-600 transition-all
                            {{ request()->routeIs('donate') ? 'w-full' : 'w-0 group-hover:w-full' }}">
                        </span>
                    </a>

                    <a href="{{ route('contact') }}"
                        class="relative group transition-all hover:text-emerald-700
                        {{ request()->routeIs('contact') ? 'font-bold text-emerald-700' : '' }}">
                        اتصل بنا
                        <span
                            class="absolute right-0 bottom-0 h-0.5 bg-emerald-600 transition-all
                            {{ request()->routeIs('contact') ? 'w-full' : 'w-0 group-hover:w-full' }}">
                        </span>
                    </a>
                </div>
            </nav>

            <!-- زر تسجيل الدخول / الخروج -->
            <div id="authButtonContainer"></div>

        </div>
    </header>

    <!-- Content -->
    <div class="mt-6 mb-6 text-right">
        <!-- Content -->
        <div class="mt-6 mb-6 text-right">
            <h2 class="text-4xl font-bold text-gray-800">{{ $title }}</h2>
            <p class="text-gray-600 mt-2 text-2xl">{{ $subtitle }}</p>
        </div>
    </div>
</section>

<script>
    function updateAuthUI() {
        const container = document.getElementById('authButtonContainer');
        if (!container) return;

        container.innerHTML = ''; // إزالة أي زر سابق
        const token = localStorage.getItem('token');

        if (token) {
            // زر تسجيل الخروج
            const logoutBtn = document.createElement('button');
            logoutBtn.textContent = 'تسجيل الخروج';
            logoutBtn.className =
                'bg-green-800 text-white px-4 py-2 rounded-full hover:bg-green-700 transition font-bold';
            logoutBtn.addEventListener('click', async () => {
                try {
                    await fetch('/api/v1/users/logout', {
                        method: 'POST',
                        headers: {
                            'Authorization': 'Bearer ' + token,
                            'Accept': 'application/json'
                        }
                    });
                } catch (err) {
                    console.error('خطأ في تسجيل الخروج:', err);
                }
                localStorage.removeItem('token');
                updateAuthUI();
                window.location.href = '/';
            });
            container.appendChild(logoutBtn);

        } else {
            // زر تسجيل الدخول
            const loginBtn = document.createElement('a');
            loginBtn.href = '/login';
            loginBtn.textContent = 'تسجيل الدخول';
            loginBtn.className =
                'bg-green-800 text-white px-4 py-2 rounded-full hover:bg-green-700 transition font-bold';
            container.appendChild(loginBtn);
        }
    }

    document.addEventListener('DOMContentLoaded', updateAuthUI);
</script>
