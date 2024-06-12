<?php

namespace App\Models;

use App\Models\User;
use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataAdmin extends Model
{

    protected $guarded = ['id'];
    // protected $table = 'data_admins';
    // public $timestamps = false;
    protected $with = ['user'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(jurusan::class);
    }
}
