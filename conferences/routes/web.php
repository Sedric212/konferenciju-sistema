<?php

use App\Http\Controllers\Admin\ConferenceController;
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

Route::get('/client/conferences/{id}', [ClientController::class, 'show'])
    ->whereNumber('id')
    ->name('client.show');

Route::get('/employee/conferences/{id}', [EmployeeController::class, 'show'])
    ->whereNumber('id')
    ->name('employee.show');

Route::get('/admin/conferences', [ConferenceController::class, 'index'])
    ->name('admin.conferences.index');

Route::get('/admin/conferences/create', [ConferenceController::class, 'create'])
    ->name('admin.conferences.create');

    Route::post('/admin/conferences', [ConferenceController::class, 'store'])
    ->name('admin.conferences.store');
