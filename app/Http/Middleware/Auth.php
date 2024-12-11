<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{
    public function handle(Request $request, Closure $next)
    {
        // Ambil data user dari session
        $user = $request->session()->get('user');

        // Cek apakah user sudah login
        if (!isset($user['is_login']) || !$user['is_login']) {
            // Jika belum login, arahkan ke halaman login dengan pesan error
            return redirect('/login')->with('error', 'Anda harus login terlebih dahulu');
        }

        // Lanjutkan ke request berikutnya jika user sudah login
        return $next($request);
    }
}
