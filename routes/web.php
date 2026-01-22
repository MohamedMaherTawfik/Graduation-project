<?php

use App\Http\Controllers\Api\V1\admin\AdminController;
use App\Http\Controllers\web\Auth\AuthController;
use App\Http\Controllers\web\home\HomeController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;

Route::prefix('')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/who', [HomeController::class, 'who'])->name('who');
    Route::get('/donate', [HomeController::class, 'donate'])->name('donate');
    Route::get('/partners', [HomeController::class, 'partners'])->name('partners');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

    Route::prefix('')->group(function () {
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::get('/register', [AuthController::class, 'register'])->name('register');
        Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])
            ->name('forgot-password');

        Route::get('/reset-password', [AuthController::class, 'showResetPassword'])
            ->name('reset-password');

    });
});


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
Route::get('/admin/contacts', [AdminController::class, 'contacts'])->name('admin.contacts');
