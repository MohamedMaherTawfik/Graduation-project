@extends('layout.layout')

@section('title', 'Reset Password')

@section('content')
    <div class="min-h-screen w-full relative flex flex-col justify-center items-center overflow-hidden">
        <img src="{{ asset('images/overlay.png') }}" class="fixed inset-0 w-full h-full object-cover" />
        <img src="{{ asset('images/login.png') }}" class="fixed inset-0 w-full h-full object-cover opacity-100" />

        <div class="relative z-10 max-w-md w-full backdrop-blur-sm p-8 rounded-2xl shadow-xl border border-gray-100"
            style="background-color: rgba(255,255,255,0.75);">

            <h2 class="text-2xl font-bold text-center text-gray-800 mb-2">إعادة تعيين كلمة المرور</h2>
            <p class="text-center text-gray-500 mb-6 text-sm">
                أدخل كلمة المرور الجديدة
            </p>

            <form id="resetForm" class="space-y-5">
                @csrf

                <input type="hidden" id="email" value="{{ request('email') }}">
                <input type="hidden" id="token" value="{{ request('token') }}">

                <input type="password" id="password" placeholder="كلمة المرور الجديدة" required>
                <input type="password" id="password_confirmation" placeholder="تأكيد كلمة المرور" required>

                <button type="submit" class="w-full bg-green-300 py-3 rounded-lg">
                    حفظ كلمة المرور
                </button>

                <div id="message" class="text-center text-sm mt-3"></div>
            </form>

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('resetForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const message = document.getElementById('message');
            message.innerHTML = '';
            message.className = 'text-center text-sm mt-3';

            const payload = {
                email: document.getElementById('email').value,
                token: document.getElementById('token').value,
                password: document.getElementById('password').value,
                password_confirmation: document.getElementById('password_confirmation').value,
            };

            const res = await fetch('/api/v1/users/reset-password', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'x-api-key': '{{ env('API_KEY') }}'
                },
                body: JSON.stringify(payload)
            });

            const data = await res.json();

            // ✅ نجاح → Redirect
            if (res.ok) {
                window.location.href = "{{ route('login') }}";
                return;
            }

            // ❌ Validation Errors
            if (data.errors) {
                let errorsHtml = '<ul class="space-y-1">';
                Object.values(data.errors).forEach(errArr => {
                    errArr.forEach(err => {
                        errorsHtml += `<li>• ${err}</li>`;
                    });
                });
                errorsHtml += '</ul>';

                message.classList.add('text-red-600');
                message.innerHTML = errorsHtml;
                return;
            }

            // ❌ Error Message عام
            if (data.message) {
                message.classList.add('text-red-600');
                message.innerHTML = data.message;
            }
        });
    </script>
@endsection
