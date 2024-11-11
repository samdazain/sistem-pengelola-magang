<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EvaluationController;
use App\Http\Controllers\Admin\JobPositionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\JobVacancyController;
use App\Http\Controllers\User\ProfileController;
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

Route::get('/', function () {
    return view('user.pages.index');
})->name('user.pages.index');

Route::middleware(['auth'])->group(function () {
    Route::middleware('user-access:0')->group(function () {
        Route::get('/job-vacancy', [JobVacancyController::class, 'index'])->name('user.dashboard');
        Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
        Route::get('/get-profile', [ProfileController::class, 'getProfile']);
        Route::get('/job-vacancy/{id}', [JobVacancyController::class, 'show'])->name('job.detail');
    });

    Route::middleware('user-access:1')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::resource('job-position', JobPositionController::class);
        Route::resource('admin', AdminController::class);
        Route::get('/evaluation', [EvaluationController::class, 'index'])->name('evaluation.index');
        // Route::get('/users', [JobVacancyController::class, 'index'])->name('users.index');

    });
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
