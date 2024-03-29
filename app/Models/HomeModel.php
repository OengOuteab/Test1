<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    protected $table = "home";
    protected $primarykey = "id";
    protected $fillable = ['title','body'];
}
