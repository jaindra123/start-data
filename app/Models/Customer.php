<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Customer extends Authenticatable
{
    use  HasFactory ;
    protected $table = "customers";      
    protected $fillable = ['cust_name','cust_email','cust_type','customer_logo','primary_color','cust_industry_id',
    'cust_password', 'cust_country','cust_state', 'zip', 'city', 'street', 'house_number'];
    //public $timestamps = false;
}
