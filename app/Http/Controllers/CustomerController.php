<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
use App\Models\Industry;
use Illuminate\Support\Facades\Validator;
>>>>>>> 9f26ec6d1dc0ee55bbc726d337b7538f09fedfb2

class CustomerController extends Controller
{
#---------------------------- Display All Customer-----------------------------#     
    public function index()
    {
        $industries = DB::table('industries')->get(); 
        $countries = DB::table('countries')->get(); 
        $customers = Customer::orderBy('id','ASC')->paginate(5);
        return view('customer/customer-data', compact('customers','countries','industries'));
    }
#--------------------------- Insert/Edit Customer ------------------------------#   
    public function store(Request $request) {
<<<<<<< HEAD
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
=======
       //print_r($request->all());
       //die();
        $ValidationRules = $request->validate([
            'cust_name' => 'required|unique:customers,cust_name',
            'cust_email' => 'required|email|unique:customers,cust_email',
            'image' => 'required|image|mimes:jpg,svg|max:2048',
            'zip' => 'required|numeric|size:11',
        ]);
        $validator = Validator::make(Input::all(), $ValidationRules);
        if ($validator->fails()) {
            return Response::json(array('success' => false,'errors' => $validator->getMessageBag()->toArray() ), 400); 
        }

        $country_code = $request->countrylist;
        $states = $request->stateslist;
        $zip = $request->ziplist;
        $city = $request->citylist;
        $street = $request->streetlists;
        $house_no = $request->house_no_list;

        $cust_password = $request->cust_password;
        $hashedPassword = Hash::make($cust_password);

        $customer_logo_name = $request->cust_logo;  // get old image name
        $image = $request->file('cust_logo');  // get new image name
        if($image!=""){
           $customer_logo_name = rand().'.'. $image->getClientOriginalExtension();
            $image->move(public_path('customer_logo'),$customer_logo_name);
        } else {
>>>>>>> 9f26ec6d1dc0ee55bbc726d337b7538f09fedfb2
           // echo "No Image Found";
        }
        $customer= Customer::updateOrCreate(
            ['id' => $request->id],
            ['cust_name' => $request->cust_name,
                'cust_email' =>$request->cust_email,
                'cust_type' =>$request->cust_type,
                'cust_password' => $hashedPassword,
                'customer_logo' =>$customer_logo_name,
<<<<<<< HEAD
                'cust_country' => 'india',
                
            ]
        );
        return response()->json(['success' => true,'message'=>'customer Created successfully']);
=======
                'primary_color' =>$request->primary_color,
                'cust_industry_id' =>$request->cust_industry,
                'cust_country' => $country_code,
                'cust_state' => $states,
                'zip' => $zip,
                'city' => $city,
                'street' => $street,
                'house_number' => $house_no, 
            ]
        );
        return response()->json(['success' => true,'message'=>'Customer Created successfully']);          
>>>>>>> 9f26ec6d1dc0ee55bbc726d337b7538f09fedfb2
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
