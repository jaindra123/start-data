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

        //$customers = Customer::orderBy('id','ASC')->paginate(5);

        $customers = Customer::join('industries', 'industries.id', '=', 'customers.cust_industry_id')
                   // ->join('countries', 'countries.country_code', '=', 'customers.country')
                    ->get(['customers.*', 'industries.industry',]);

        //print_r($customers );
        //die();

        return view('customer/customer-data', compact('customers','countries','industries'));
    }
#--------------------------- Insert/Edit Customer ------------------------------#   
    public function store(Request $request) {

        /*$ValidationRules = $request->validate([
            'customer_name' => 'required|unique:customers,customer_name',
            'customer_email' => 'required|email|unique:customers,customer_email',
            'customer_logo' => 'required|image|mimes:jpg,svg',
            //'customer_zip' => 'required',
        ]);
        $validator = Validator::make(Input::all(), $ValidationRules);
        if ($validator->fails()) {
            return Response::json(array('success' => false,'errors' => $validator->getMessageBag()->toArray() ), 400); 
        }*/

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
            
}
