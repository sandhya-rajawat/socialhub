<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SignupController;
use App\Http\Controllers\Admin\SigninController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\AuthController;

Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/', function () {
        return redirect()->route('admin.signin');
    });

    // Signup
    Route::get('/signup', [SignupController::class, 'index'])
        ->name('signup');

    Route::post('/signup', [SignupController::class, 'store'])
        ->name('signup.store');

    // Signin
    Route::get('/signin', [SigninController::class, 'index'])
        ->name('signin');

    Route::post('/signin', [SigninController::class, 'store'])
        ->name('signin.store');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
