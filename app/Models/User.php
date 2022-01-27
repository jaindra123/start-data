<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

// use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "access_managements";
    protected $fillable = ['password','pass','email','name','language_id','customer_id','role'];

    public function language()
    {
        return $this->hasMany(Language::class, 'id', 'language_id');
    }

    public function customer()
    {
        return $this->hasMany(Customer::class, 'id', 'customer_id');
    }
    
}
