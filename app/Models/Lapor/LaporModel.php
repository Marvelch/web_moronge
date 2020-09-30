<?php

namespace App\Models\Lapor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporModel extends Model
{
    protected $table = 'laporan';

    protected $fillabel = [
        'nama','nik','phone','report'
    ];
}
