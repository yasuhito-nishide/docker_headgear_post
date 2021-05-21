<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headgear extends Model
{
    use HasFactory;

    protected $table = "headgears";
    protected $fillable = ["file_name","file_path",'user_id','title'];
}
