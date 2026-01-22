<?php

namespace App\Http\Controllers\web\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('Auth.register');
    }

    public function login()
    {
        return view('Auth.login');
    }

    public function showForgotPassword()
    {
        return view('Auth.forgot-password');
    }

    public function showResetPassword(Request $request)
    {
        return view('auth.reset-password', [
            'email' => $request->email,
            'token' => $request->token,
        ]);
    }
}
