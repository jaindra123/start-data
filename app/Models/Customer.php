<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Foundation\Auth\User as Model;

class Customer extends Authenticatable
{
    use  HasFactory ;
    protected $table = "customers";      
    protected $fillable = ['customer_name','customer_email','customer_type','customer_logo','primary_color',
    'cust_industry_id','customer_password', 'country','state', 'zip', 'city', 'street', 'house_number'];
    //public $timestamps = false;


    public function getAllCustomer(){
        return Customer::all();
    }
}
