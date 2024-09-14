<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PosisiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('pelamar', PelamarController::class);
Route::resource('posisi', PosisiController::class);
Route::resource('penilaian', PenilaianController::class);
Route::resource('admin', AdminController::class);
