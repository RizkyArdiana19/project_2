<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'visited_at',
    ];

    // Jika Anda ingin menggunakan tanggal secara otomatis, pastikan menambahkan casts:
    protected $casts = [
        'visited_at' => 'datetime',
    ];
}
