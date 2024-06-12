<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyUserVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Periksa apakah pengguna sudah terautentikasi
        if (auth()->check()) {
            // Periksa status verifikasi pengguna
            if (auth()->user()->status_verifikasi !== 'verified') {
                // Jika status verifikasi adalah 'pending', redirect ke halaman tertentu
                // atau tampilkan pesan bahwa akun belum diverifikasi
                return redirect()->route('admin.belum-verifikasi')->with('error', 'Akun Anda belum diverifikasi.');
            }
        }

        // Lanjutkan dengan request normal jika pengguna sudah terautentikasi
        // dan status verifikasi adalah 'verified', atau jika pengguna tidak terautentikasi.
        return $next($request);
    }
}
