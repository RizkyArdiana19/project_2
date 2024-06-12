<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Visitor; // Pastikan model Visitor sudah ada

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Hitung jumlah Admin
        $adminCount = User::where('role', 'admin')->count();

        // Hitung jumlah Mahasiswa
        $studentCount = User::where('role', 'mahasiswa')->count();

        // Hitung jumlah Pengunjung
        $visitorCount = Visitor::count();

        $data = [
            'title' => 'Dashboard Superadmin',
            'adminCount' => $adminCount,
            'studentCount' => $studentCount,
            'visitorCount' => $visitorCount,
        ];
        return view('superadmin.dashboardsuperadmin', $data);

    }

    // Metode lainnya tetap sama
}
