<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\SignupController;
use App\Http\Controllers\admin\SigninController;

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

    Route::post('/signin', [SigninController::class, 'login'])
        ->name('signin.login');
        route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});