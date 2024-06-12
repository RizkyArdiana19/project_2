<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusans = [
            [
                'nama_jurusan' => 'Teknologi Informasi dan Komputer',
            ],
            [
                'nama_jurusan' => 'Pertanian',
            ],
            [
                'nama_jurusan' => 'Teknik Mesin',
            ],
            [
                'nama_jurusan' => 'Kesehatan',
            ],
        ];
        foreach ($jurusans as $jurusan){
            Jurusan::insert($jurusan);
        }
    }
}
