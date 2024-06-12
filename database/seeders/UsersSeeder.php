<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nim' => '10109050',
                'nama' => 'Iki',
                'username' => 'ikiw',
                'email' => 'ikiw@gmail.com',
                'password' => Hash::make('ikiw123'),
                'role' => 'superadmin',
                'jurusan_id' => '1',
                'prodi_id' => '1',
                'status_verifikasi' => 'verified',
                'created_at' => now('Asia/Jakarta'),
            ],
            [
                'nim' => '10109049',
                'nama' => 'admin jtik',
                'username' => 'jtik',
                'email' => 'jtik@gmail.com',
                'password' => Hash::make('jtik1234'),
                'role' => 'admin',
                'jurusan_id' => '1',
                'prodi_id' => '1',
                'status_verifikasi' => 'verified',
                'created_at' => now('Asia/Jakarta'),
            ],
            ];
            foreach ($users as $user){
                User::insert($user);
            }
    }
}
