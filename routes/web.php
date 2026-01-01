<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::prefix('cp')->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('login', [LoginController::class, 'index'])->name('login');
        Route::post('login', [LoginController::class, 'login'])->name('login_post');
        Route::get('register', [LoginController::class, 'register'])->name('register');
    });

    Route::middleware('auth')->group(function () {
        Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    });
});
