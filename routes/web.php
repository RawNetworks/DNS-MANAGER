<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::prefix('auth')->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('login', [LoginController::class, 'index'])->name('login');
        Route::get('register', [LoginController::class, 'register'])->name('register');
    });

    Route::middleware('auth')->group(function () {
        
    });
});
