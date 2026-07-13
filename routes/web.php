<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\signupController;
use App\Http\Controllers\admin\signinController;


Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

Route::get('/admin/signup', [signupController::class, 'index'])
    ->name('admin.signup');

Route::post('/admin/signup', [signupController::class, 'store'])
    ->name('admin.signup.store');






Route::get('/admin/signin', [signinController::class, 'index'])
    ->name('admin.signin');
