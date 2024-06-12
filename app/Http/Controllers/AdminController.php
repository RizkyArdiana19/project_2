<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Visitor; // Pastikan model Visitor sudah ada

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin',
            'students' => User::where([
                ['role', 'mahasiswa']
            ])->get()->all(),
            'visitors' => Visitor::all(),
        ];
        return view('admin.dashboardadmin', $data);

    }

    // Metode lainnya tetap sama
}
