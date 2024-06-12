<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodis = [
            [
                'nama_prodi' => 'Sistem Informasi',
                'jurusan_id' => '1',
            ],
            [
                'nama_prodi' => 'Teknologi Rekayasa Perangkat Lunak',
                'jurusan_id' => '1',
            ],
            [
                'nama_prodi' => 'Agroindustri',
                'jurusan_id' => '2',
            ],
            [
                'nama_prodi' => 'Teknologi Produksi Tanaman Pangan',
                'jurusan_id' => '2',
            ],
            [
                'nama_prodi' => 'Teknik Perawatan dan Perbaikan Mesin',
                'jurusan_id' => '3',
            ],
            [
                'nama_prodi' => 'Teknologi Rekayasa Manufaktur',
                'jurusan_id' => '3',
            ],
            [
                'nama_prodi' => 'Keperawatan',
                'jurusan_id' => '4',
            ],

        ];
        foreach ($prodis as $prodi){
            Prodi::insert($prodi);
        }
    }
}
