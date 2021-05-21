<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadImage extends Model
{
    use HasFactory;
    protected $table = "headgear";
    protected $fillable = ["file_name","file_path",'file_size','user_id','title'];
}
