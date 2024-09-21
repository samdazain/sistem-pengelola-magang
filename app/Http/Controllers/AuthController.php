<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        // Memvalidasi dan memproses data login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if (auth()->attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'Email or password does not match'
        ])->onlyInput('email');
    }

    public function create()
    {
        return view('pages.register'); // Menampilkan halaman register
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // Pastikan ada konfirmasi password
        ]);

        // Menyimpan pengguna baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 1, // Set role_id menjadi 1 secara default
        ]);

        // Redirect atau memberikan respon setelah berhasil
        return redirect('/login');
    }
}
