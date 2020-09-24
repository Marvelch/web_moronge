<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = 'post';
    protected $fillable = ['id','title','category','img','content','users_id'];
}
