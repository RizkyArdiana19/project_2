<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/login');
        } else {
            return view('login');
        }
    }

    public function login_new()
    {
        return view('login');
    }

    public function actionlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            // Jika email tidak ditemukan
            return redirect('/login')->with([
                'message' => 'Email tidak ditemukan.'
            ]);
        }

        if (!Auth::attempt($credentials)) {
            // Jika password salah
            return redirect('/login')->with([
                'message' => 'Password salah.'
            ]);
        }

        // Jika login berhasil
        if (Auth::user()->role == 'admin') {
            $request->session()->regenerate();
            return redirect('admin')->with([
                'message' => 'Berhasil login'
            ]);
        } elseif (Auth::user()->role == 'superadmin') {
            $request->session()->regenerate();
            return redirect('superadmin')->with([
                'message' => 'Berhasil login'
            ]);
        } elseif (Auth::user()->role == 'mahasiswa') {
            $request->session()->regenerate();
            return redirect('user')->with([
                'message' => 'Berhasil login'
            ]);
        } else {
            return redirect('/login')->with([
                'message' => 'Kesalahan dalam autentikasi. Pastikan email dan password benar.'
            ]);
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/login');
    }
}
