<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/client', [ClientController::class, 'index'])
    ->name('client.index');

Route::get('/employee', [EmployeeController::class, 'index'])
    ->name('employee.index');

Route::get('/admin', [DashboardController::class, 'index'])
    ->name('admin.index');