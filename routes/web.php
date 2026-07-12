<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;


Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard');