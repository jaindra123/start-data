<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Industry extends Authenticatable
{
    use HasFactory;
    protected $table = "industries";      
    protected $fillable = ['indury'];
    //public $timestamps = false;
}
