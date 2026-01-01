<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::redirect('/', function () {
    return redirect()->route('auth');
});

Route::prefix('auth')->group(function () {
    if (!Auth::User()) {
        return redirect()->route('login');
    } else {
        return redirect()->route('register');
    }
    // Auth Routes
    Route::get('login/', [LoginController::class, 'login'])->name('login');
    Route::get('register/', [LoginController::class, 'login'])->name('register');
})->name('auth');
