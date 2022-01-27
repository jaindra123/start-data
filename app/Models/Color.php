<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table = "color_settings";
    protected $fillable = ['color1','color2','color3','color4','color5','language_id','customer_id'];
}
