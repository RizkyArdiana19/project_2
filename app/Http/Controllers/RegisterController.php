<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function actionregister(Request $request)
    {
        $user = User::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'mahasiswa',
            'jurusan_id' => $request->jurusan_id,
            'prodi_id' => $request->prodi_id,
            'status_verifikasi' => 'pending', // Set status verifikasi menjadi 'pending'
        ]);

        return redirect('/login-new')->with('success', 'Registration Successfully! Please Log In Now');
    }

    public function create()
    {
        $data = [
            'prodis' => Prodi::all(),
            'jurusans' => Jurusan::all(),
        ];
        return view('register', $data);
    }
}
