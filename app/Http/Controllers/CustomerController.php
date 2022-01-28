<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Industry;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
#---------------------------- Display All Customer-----------------------------#     
    public function index()
    {
        $industries = DB::table('industries')->get(); 
        $countries = DB::table('countries')->get(); 
        $customers = Customer::join('industries', 'industries.id', '=', 'customers.cust_industry_id')
                    ->join('countries', 'countries.country_code', '=', 'customers.country')
                    ->orderBy('customers.id','ASC')
                    ->get(['customers.*', 'industries.industry', 'countries.country']);

        return view('customer/list', compact('customers','countries','industries'));
    }
#--------------------------- Insert/Edit Customer ------------------------------#   
    public function store(Request $request) {

		$request->validate ([
			'customer_name' => 'required',
			'customer_email' => 'required',
			'customer_password' =>'required|min:5',
			'password_confirm'  => 'required|same:customer_password',
			'customer_logo' => 'required|image|mimes:jpg,svg',
		], 
		[
			'customer_password.regex'  => 'Password must contain at least 1 UpperCase letter, 1 lowercase letter, 1 number, 1 Special Character.',
			'password_confirm.same' => 'Password and Confirm Password should be same',
			'customer_logo.required' => 'Customer logo must be a file of type : JPG & svg',
		]);

        $country_code = $request->countrylist;
        $states = $request->stateslist;
        $zip = $request->ziplist;
        $city = $request->citylist;
        $street = $request->streetlists;
        $house_no = $request->house_no_list;

        $customer_password = $request->customer_password;
        $hashedPassword = Hash::make($customer_password);

        $customer_logo_name = $request->customer_logo;  // get old image name
        $image = $request->file('customer_logo');  // get new image name
        if($image!=""){
           $customer_logo_name = rand().'.'. $image->getClientOriginalExtension();
            $image->move(public_path('customer_logo'),$customer_logo_name);
        } else {
           // echo "No Image Found";
        }
        $customer= Customer::updateOrCreate(
            ['id' => $request->id],
            ['customer_name' => $request->customer_name,
                'customer_email' =>$request->customer_email,
                'customer_type' =>$request->customer_type,
                'customer_password' => $hashedPassword,
                'customer_logo' =>$customer_logo_name,
                'primary_color' =>$request->primary_color,
                'cust_industry_id' =>$request->customer_industry,
                'country' => $country_code,
                'state' => $states,
                'zip' => $zip,
                'city' => $city,
                'street' => $street,
                'house_number' => $house_no, 
            ]
        );
        return response()->json(['success' => true,'message'=>'Customer Created successfully']);          
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
#---------------------------  --------------------------------------#            
}
