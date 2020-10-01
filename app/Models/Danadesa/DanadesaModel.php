<?php

namespace App\Models\Danadesa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanadesaModel extends Model
{
    protected $table = 'danadesa';

    protected $fillable = [
        'id','tentang','filelaporan','keterangan','users_id'
    ];
}
