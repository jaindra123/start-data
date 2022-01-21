<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Customer extends Authenticatable
{
    use  HasFactory ;
    protected $table = "customers";      
<<<<<<< HEAD
    protected $fillable = ['customer_name','customer_email','customer_type','customer_logo','customer_password'];

=======
    protected $fillable = ['cust_name','cust_email','cust_type','customer_logo','primary_color','cust_industry_id',
    'cust_password', 'cust_country','cust_state', 'zip', 'city', 'street', 'house_number'];
>>>>>>> 9f26ec6d1dc0ee55bbc726d337b7538f09fedfb2
    //public $timestamps = false;
}
