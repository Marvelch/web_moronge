<?php

namespace App\Models\Jadwal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalModel extends Model
{
    protected $table = 'jadwal';

    protected $fillable = [
        'users_id','acara','waktu','lokasi','keterangan'
    ];
}
