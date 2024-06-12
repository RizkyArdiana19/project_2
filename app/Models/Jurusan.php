<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $with = ['prodi'];

    public function prodi()
    {
        return $this->hasMany(Prodi::class);
    }
    public function jurusan()
    {
        return $this->hasMany(User::class);
    }
}
