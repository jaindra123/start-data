<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginAccess;
// use App\Mail\LoginAccess;


class AuthController extends Controller
{
    public function login()
    {
        //login check
        if(Auth::check()){
            $id = Auth::user()->id;
            $user = User::where(['id'=>$id])->first();
            if($user->role == 'admin'){
                return redirect('dashboard');
            }
            else{
                return redirect('user-profile');
            }
        }
        else{
            return view('accessManagement/login');
        }
    } 

    //user(access management) login functionality
    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where(['email'=>$request->email])->first();

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            $request->session()->put('user',$user);
            if($user->role == 'admin'){
                return redirect()->intended('dashboard');
            }
            else{
                return redirect()->intended('user-profile');
            }
        }
        else{
            $request->session()->flash('message', ['auth' => 'Authentication Failed!!!!', 'un' => 'Email & Password not matched']);
            return redirect('login');
        }
    }

    //register access management
    public function registration()
    {
        if(Auth::check()){
            $id = Auth::user()->id;
            $user = User::where(['id'=>$id])->first();
            if($user->role == 'admin'){
                $data['type'] = 'Access Management';
                $data['button'] = 'Register';
                $data['languages'] = DB::table('languages')->get();
                $data['customers'] = DB::table('customers')->get();
                // return redirect('dashboard');
                return view('accessManagement/register', $data);
            }
            else{
                return redirect('user-profile');
            }
        }/*else{
            $data['type'] = 'Register Access User';
            $data['button'] = 'Sign up';
            $data['languages'] = DB::table('languages')->get();
            $data['customers'] = DB::table('customers')->get();
            return view('accessManagement/registration', $data);
        }*/
    }

    //access management creation
    public function userRegistration(Request $request)
    {
        $request->validate(
            [
                'name'              => 'required|string',
                'email'             => 'required|email|unique:access_managements,email,',
                'password'          => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
                'password_confirm'  => 'required|same:password',
                'language'          => 'required',
                'customer'          => 'required'
            ],
            [
                'password.regex'        => 'Password must contain at least 1 UpperCase letter, 1 lowercase letter, 1 number, 1 Special Character.',
                'password_confirm.same' => 'Password and Confirm Password should be same',
            ]
        );

        //Form store
        $data = User::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'pass'          => $request->password,
            'language_id'   => $request->language,
            'customer_id'   => $request->customer,
            'role'          => 'customer'
        ]);

        $mailData = [
            'email'     => $request->email,
            'password'  => $request->password
        ];

        Mail::to($request->email)->send(new LoginAccess($mailData));

        if (Mail::failures()) {
            $request->session()->flash('message','Register sucessfully Mail Sending Failed');
            return redirect('access-list');
        }else{
            $request->session()->flash('message','Register sucessfully Mail Send Successfully');
            return redirect('access-list');
        }
    }

    //Dashboard
    public function dashboard()
    {
        if(Auth::check()){
            $id = Auth::user()->id;
            $user = User::where(['id'=>$id])->first();
            if($user->role == 'admin'){
                // return view('dashboard');
                return view('backend/dashbord');
            }
            else{
                return view('user/userProfile');
            }
        }
        return redirect('login');
    }

    //User Profile
    public function userProfile()
    {
        if(Auth::check()){
            $id = Auth::user()->id;
            $user = User::where(['id'=>$id])->first();
            return view('user/userProfile');
        }
        return redirect('login');
    }

    //Logout
    public function logout()
    {
        if(Auth::check()){
            Session::flush();
            Auth::logout();
            session()->flash('msg', 'User Logout successfully');
        }
        return redirect('login');
    }

    //Listing
    public function accessList(){
        $values = User::with('language')->with('customer')->where('role','!=','admin')->paginate(10);
        return view('accessManagement/list', ['values' => $values]);
    }

    //Edit Registration
    public function editRegistration(Request $request, $value){

        if(Auth::check()){
            $id = Auth::user()->id;
            $user = User::where(['id'=>$id])->first();
            if($user->role == 'admin'){
                $data = [];
                if($value != ''){
                    $data['id'] = $value;
                    $data['type'] = 'Edit Access User';
                    $data['button'] = 'Update';
                    $data['user'] = User::where(['id'=>$value])->first();
                    $data['languages'] = DB::table('languages')->get();
                    $data['customers'] = DB::table('customers')->get();
                }

                if($request->method() == 'POST'){
                    
                    Validator::make($data, [
                        'email' => [
                            'required',
                            'email',
                            Rule::unique('access_managements')->ignore($value),
                        ]
                    ]);

                    $request->validate(
                        [
                            'name'              => 'required|string',
                            'password'          => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
                            'password_confirm'  => 'required|same:password',
                            'language'          => 'required',
                            'customer'          => 'required'
                        ],
                        [
                            'password.regex'        => 'Password must contain at least 1 UpperCase letter, 1 lowercase letter, 1 number, 1 Special Character.',
                            'password_confirm.same' => 'Password and Confirm Password should be same',
                        ]
                    );

                    $response = [
                        'name'          => $request->name,
                        'email'         => $request->email,
                        'password'      => Hash::make($request->password),
                        'pass'          => $request->password,
                        'language_id'   => $request->language,
                        'customer_id'   => $request->customer,
                    ];

                    if($value != ''){
                        User::where('id',$value)->update($response);
                        $request->session()->flash('message','Updated Successfully');
                        return redirect('access-list');
                    }
                }
                return view('accessManagement/register', $data);
            }
        }
    }

    public function delecteCustomer($value){
        if(Auth::check()){
            $id = Auth::user()->id;
            $user = User::where(['id'=>$id])->first();
            if($user->role == 'admin'){
                // return view('dashboard');
                // echo $value;
                // die;
                $user = User::find($value);
                return view('backend.delete', compact('user'));
                // User::where('id',$value)->delete();
                // $request->session()->flash('msg','Customer access credentials deleted Successfully');
                // return redirect('access-list');
            }
            else{
                return view('user/userProfile');
            }
        }
    }

    //Send Mail
    public function sendEmail(Request $request, $id){
        $user = User::where(['id'=>$id])->first();
        // Mail::send('email', [   'Username' => $user->username,
        //                         'Password' => $user->password
        //                     ],
        //                     function ($message) {   $message->from('sanjay.chaudhary@techinventive.com');
        //                                             $message->to($user->email)
        //                                                     ->subject('Login Access');
        //                                         }
        //             );// send but variable not working in this method.
        $request->session()->flash('message','Mail Send Successfully');
        return redirect('access-list');
    }
}
