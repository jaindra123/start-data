<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
#---------------------------- Display All Customer-----------------------------#     
    public function index()
    {
        $data['customers'] = Customer::orderBy('id','ASC')->paginate(5);
        return view('customer/customer-data',$data);
    }
#--------------------------- Insert/Edit Customer ------------------------------#   
    public function store(Request $request) {
        $cust_country = $request->cust_country;

        //$cust_country = $_POST['cust_country'];
        $rules = [];
        foreach($request->input('cust_country') as $key => $value) {
            $rules = $value;
        }

        print_r($cust_country);
        die();
        $cust_password = $request->cust_password;
        $hashedPassword = Hash::make($cust_password);
        $customer_logo_name = $request->cust_logo;  // get old image name
        $image = $request->file('cust_logo');  // get new image name
        if($image!=""){
            $customer_logo_name = rand().'.'. $image->getClientOriginalExtension();
            $image->move(public_path('customer_logo'),$customer_logo_name);
        } else{
           // echo "No Image Found";
        }
        $customer= Customer::updateOrCreate(
            ['id' => $request->id],
            ['cust_name' => $request->cust_name,
                'cust_email' =>$request->cust_email,
                'cust_type' =>$request->cust_type,
                'cust_password' => $hashedPassword,
                'customer_logo' =>$customer_logo_name,
                'cust_country' => 'india',
                
            ]
        );
        return response()->json(['success' => true,'message'=>'customer Created successfully']);
    }
#--------------------------- Single Customer Show --------------------------#
    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $customer  = Customer::where($where)->first();
        return response()->json($customer);
    }
#--------------------------- Delete --------------------------------------#
    public function destroy(Request $request)
    {
        $customer = Customer::where('id',$request->id)->delete();
        return response()->json(['success' => true]);
    }
}
