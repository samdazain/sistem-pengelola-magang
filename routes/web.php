<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EvaluationController;
use App\Http\Controllers\Admin\JobPositionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\JobVacancyController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::get('/', function () {
    return redirect('/dashboard');
});


Route::get('/register', [AuthController::class, 'create'])->name('register.create');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

Route::middleware(['auth'])->group(function () {
    Route::middleware('user-access:0')->group(function () {
        Route::get('/job-vacancy', [JobVacancyController::class, 'index'])->name('jobVacancy.index');
    });

    Route::middleware('user-access:1')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::resource('job-position', JobPositionController::class);
        Route::resource('admin', AdminController::class);
        Route::get('/evaluation', [EvaluationController::class, 'index'])->name('evaluation.index');
        Route::get('/users', [UserController::class, 'index'])->name('users.index');

    });
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
