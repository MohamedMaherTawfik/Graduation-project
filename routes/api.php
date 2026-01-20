<?php

use App\Http\Controllers\Api\V1\admin\AdminController;
use App\Http\Controllers\Api\V1\Auth\AuthController;
use App\Http\Middleware\adminMiddleware;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {

    Route::prefix('users')->group(function () {
        Route::post('register', [AuthController::class, 'register'])->middleware(['throttle:3,1', 'guest']);
        Route::post('login', [AuthController::class, 'login'])->middleware(['throttle:5,1', 'guest']);

        Route::middleware(['auth:sanctum', 'throttle:5,1'])->group(function () {
            Route::get('profile', [AuthController::class, 'profile']);
        });
    });

});


Route::prefix('admin')->middleware(['auth:sanctum', 'throttle:10,1', adminMiddleware::class])->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('all', [AdminController::class, 'getAllUsers'])->name('admin.users.all');
        Route::delete('{user}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
    });
});
