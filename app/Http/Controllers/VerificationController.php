<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function belumDiverifikasi()
    {
        return view('admin.belum-verifikasi');
    }
}
