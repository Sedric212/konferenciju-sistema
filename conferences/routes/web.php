<?php

use App\Http\Controllers\Admin\ConferenceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::pattern('id', '[0-9]+');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/client', [ClientController::class, 'index'])->name('client.index');
Route::get('/client/conferences/{id}', [ClientController::class, 'show'])->name('client.show');
Route::post('/client/conferences/{id}/registrations', [ClientController::class, 'register'])->name('client.register');
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/conferences/{id}', [EmployeeController::class, 'show'])->name('employee.show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::resource('conferences', ConferenceController::class)->parameters(['conferences' => 'id'])->except('show');
    Route::resource('users', UserController::class)->parameters(['users' => 'id'])->only(['index', 'edit', 'update']);
});
