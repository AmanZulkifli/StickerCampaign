<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DriverDashboardController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::middleware(['auth', 'driver'])->group(function () {
    Route::get('/dashboard', [DriverDashboardController::class, 'index'])->name('dashboard');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
