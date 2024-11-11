<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobPosition;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahAdmin = User::where('role_id', 1)->whereNull('deleted_at')->orderBy('created_at', 'desc')->count();
        $jumlahPengguna = User::where('role_id', 0)->whereNull('deleted_at')->orderBy('created_at', 'desc')->count();
        $jobPositions = JobPosition::whereNull('deleted_at')->orderBy('created_at', 'desc')->count();

        return view('admin.pages.dashboard', compact('jumlahAdmin', 'jumlahPengguna', 'jobPositions'));
    }
}
