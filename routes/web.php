<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\SignupController;
use App\Http\Controllers\admin\SigninController;


Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

Route::get('/admin/signup', [SignupController::class, 'index'])
    ->name('admin.signup');

Route::post('/admin/signup', [SignupController::class, 'store'])
    ->name('admin.signup.store');






Route::get('/admin/signin', [SigninController::class, 'index'])
    ->name('admin.signin');
Route::post('/admin/signin', [SigninController::class, 'authenticate'])
    ->name('admin.signin.store');