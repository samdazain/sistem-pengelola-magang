<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Cek apakah pengguna terautentikasi
        if (! auth()->check()) {
            return redirect()->route('login'); // Redirect ke halaman login jika tidak terautentikasi
        }

        // Cek apakah role_id pengguna ada dalam daftar role yang diizinkan
        if (in_array(auth()->user()->role_id, $roles)) {
            return $next($request); // Izinkan akses jika role_id ada dalam daftar
        }

        // Redirect berdasarkan role_id
        if (auth()->user()->role_id == 1) {
            return redirect()->route('admin.index'); // Redirect ke halaman admin jika role_id adalah 1
        } elseif (auth()->user()->role_id == 0) {
            return redirect()->route('user.dashboard'); // Redirect ke halaman user jika role_id adalah 0
        }

        // Jika tidak ada role yang sesuai, redirect ke halaman login atau halaman default
        return redirect()->route('login');
    }
}
