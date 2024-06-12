<?php

// Contoh model Eloquent
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['status_verifikasi']; // Pastikan atribut ini sesuai dengan kolom yang ada di tabel database

    public static $rules = [
        'status_verifikasi' => 'max:255', // Pastikan panjang maksimumnya mencukupi
    ];

    
}

