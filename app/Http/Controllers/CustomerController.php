<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

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
        //echo $email = $request->input('cust_email');
        $customer= Customer::updateOrCreate(
            ['id' => $request->id],
            ['cust_name' => $request->cust_name,
                'cust_email' =>$request->cust_email,
                'cust_type' =>$request->cust_type,
            ]);
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
