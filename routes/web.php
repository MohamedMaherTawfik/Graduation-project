<?php

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
    });
});