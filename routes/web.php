<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PosisiController;
use App\Http\Controllers\UserController; // Tambahkan UserController
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Route untuk register
Route::get('/register', [AuthController::class, 'create'])->name('register.create'); // Menampilkan form register
Route::post('/register', [AuthController::class, 'store'])->name('register.store'); // Menyimpan data pengguna baru

Route::middleware('auth')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('pelamar', PelamarController::class);
    Route::resource('posisi', PosisiController::class);
    Route::resource('penilaian', PenilaianController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('users', UserController::class); // Menambahkan resource untuk User
});
