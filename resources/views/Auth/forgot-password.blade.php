@extends('layout.layout')

@section('title', 'Forgot Password')

@section('content')
    <div class="min-h-screen w-full relative flex flex-col justify-center items-center overflow-hidden">
        <img src="{{ asset('images/overlay.png') }}" class="fixed inset-0 w-full h-full object-cover" />
        <img src="{{ asset('images/login.png') }}" class="fixed inset-0 w-full h-full object-cover opacity-100" />

        <div class="relative z-10 max-w-md w-full backdrop-blur-sm p-8 rounded-2xl shadow-xl border border-gray-100"
            style="background-color: rgba(255,255,255,0.75);">

            <h2 class="text-2xl font-bold text-center text-gray-800 mb-2">نسيت كلمة المرور</h2>
            <p class="text-center text-gray-500 mb-6 text-sm">
                اكتب بريدك الإلكتروني وسنقوم بإعادة تعيين كلمة المرور
            </p>

            <form id="forgotForm" class="space-y-5">
                @csrf

                <input type="email" name="email" id="email"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300" placeholder="البريد الإلكتروني" required>

                <button type="submit" class="w-full bg-green-300 py-3 rounded-lg">
                    إرسال رابط التعيين
                </button>

                <div id="message" class="text-center text-sm mt-3"></div>
            </form>

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('forgotForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const email = document.getElementById('email').value;

            const res = await fetch('/api/v1/users/forgot-password', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'x-api-key': '{{ env('API_KEY') }}'
                },
                body: JSON.stringify({
                    email
                })
            });

            const data = await res.json();

            if (data.reset_link) {
                // 🚀 Redirect مباشر
                window.location.href = data.reset_link;
            }
        });
    </script>
@endsection
