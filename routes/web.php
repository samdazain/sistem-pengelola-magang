<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\JobPositionController;
use App\Http\Controllers\UserController; // Tambahkan UserController
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route Login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::get('/', function () {
    return redirect('/admin');
});

// Route untuk register
Route::get('/register', [AuthController::class, 'create'])->name('register.create'); // Menampilkan form register
Route::post('/register', [AuthController::class, 'store'])->name('register.store'); // Menyimpan data pengguna baru

// Rute untuk dashboard berdasarkan role_id
Route::middleware(['auth'])->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.dashboard')->middleware('user-access:0'); // Hanya untuk user biasa

    // Rute untuk admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('user-access:1'); // Hanya untuk admin

    // Rute untuk pengguna
    Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('user-access:0'); // Hanya untuk user biasa

    // Rute untuk posisi pekerjaan
    Route::get('/job-position', [JobPositionController::class, 'index'])->name('job-position.index')->middleware('user-access:1'); // Hanya untuk admin

    // Rute untuk evaluasi
    Route::get('/evaluation', [EvaluationController::class, 'index'])->name('evaluation.index')->middleware('user-access:1'); // Hanya untuk admin
});

// Tambahkan rute untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
