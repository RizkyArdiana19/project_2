<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;


    public function jurusan()
    {
        return $this->belongsTo(User::class);
    }
    public function prodi()
    {
        return $this->belongsTo(User::class);
    }
}
