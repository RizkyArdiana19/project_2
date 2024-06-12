<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use App\Models\Jurusan;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;

class DataMahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $katakunci = $request->get('search');
        $jumlahbaris = 4;

        $query = DataMahasiswa::with(['jurusan', 'prodi', 'user']);

        if ($katakunci) {
            $query->where(function ($q) use ($katakunci) {
                $q->where('nim', 'like', "%$katakunci%")
                    ->orWhere('nama', 'like', "%$katakunci%")
                    ->orWhere('email', 'like', "%$katakunci%");
            });
        }

        $validateData = $query->orderBy('nim', 'desc')->paginate($jumlahbaris);

        // Mengambil semua user dengan role 'mahasiswa' yang sudah diverifikasi
        $userMahasiswaVerified = User::where('role', 'mahasiswa')
            ->where('status_verifikasi', 'verified')
            ->get();

        // Mengambil semua user dengan role 'mahasiswa' yang belum diverifikasi
        $userMahasiswaPending = User::where('role', 'mahasiswa')
            ->where('status_verifikasi', 'pending')
            ->get();

        // Meneruskan variabel $userMahasiswa ke view
        return view('admin.datamahasiswa', [
            'title' => 'Data Mahasiswa',
            'validateData' => $validateData,
            'userMahasiswaVerified' => $userMahasiswaVerified,
            'userMahasiswaPending' => $userMahasiswaPending,
        ]);
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->status_verifikasi = $request->status_verifikasi; // Pastikan nilai ini sesuai dengan tipe data dan panjang maksimum
        $user->save();
    }


    public function aktifkanAkun($id)
    {
        $user = User::find($id);

        if ($user) {
            // Mengubah status verifikasi menjadi 'verified'
            $user->status_verifikasi = 'verified';
            $user->save();

            return redirect()->back()->with('success', 'Akun berhasil diaktifkan.');
        } else {
            return redirect()->back()->with('error', 'Gagal mengaktifkan akun. Pengguna tidak ditemukan.');
        }
    }

    public function nonaktifkan($id)
    {
        $user = User::findOrFail($id);
        $user->status_verifikasi = 'nonaktif';
        $user->save();

        return redirect()->back()->with('success', 'Akun berhasil dinonaktifkan.');
    }

    public function hapus($id)
    {
        $mahasiswa = User::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->back()->with('success', 'Mahasiswa berhasil dihapus.');
    }
}
