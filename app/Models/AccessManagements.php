<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class AccessManagements extends Model
{
    use HasFactory;
    protected $fillable = ['username','password','email','name','language_id','customer_id','role'];
}
