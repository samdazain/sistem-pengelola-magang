<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']])) {
            return redirect()->route(auth()->user()->role_id == 1 ? 'dashboard.index' : 'jobVacancy.index'); // Redirect ke dashboard admin atau user
        } else {
            return redirect()->route('login')
                ->withErrors([
                    'email' => 'Email or password does not match'
                ])->onlyInput('email');
        }
    }

    public function create()
    {
        return view('auth.register'); // Menampilkan halaman register
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
            'role_id' => 0, // Set role_id menjadi 0 untuk peserta
        ]);

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Anda telah berhasil logout.');
    }

    // Metode untuk menampilkan dashboard pengguna
    public function userDashboard(): View
    {
        return view('userDashboard'); // Ganti dengan view yang sesuai
    }

    // Metode untuk menampilkan dashboard admin
    public function adminDashboard(): View
    {
        return view('adminDashboard'); // Ganti dengan view yang sesuai
    }
}
