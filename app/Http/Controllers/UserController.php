<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.role_user.job_position.index'); // Ganti dengan tampilan dashboard pengguna
    }
}
