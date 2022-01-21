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
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where(['username'=>$request->username])->first();

        $credentials = $request->only('username', 'password');
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
            $request->session()->flash('message', ['auth' => 'Authentication Failed!!!!', 'un' => 'Username & Password not matched']);
            return redirect('login');
        }
    }

    //register access management
    public function registration()
    {
        $data['type'] = 'Register Access User';
        $data['button'] = 'Sign up';
        $data['languages'] = DB::table('languages')->get();
        $data['customers'] = DB::table('customers')->get();
        return view('accessManagement/registration', $data);
    }

    //access management creation
    public function userRegistration(Request $request)
    {
        // Form validation
        $request->validate(
            [
                'name'              => 'required|string',
                'email'             => 'required|email|unique:access_managements,email,',
                'username'          => 'required|unique:access_managements,username',
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
            'username'      => $request->username,
            'password'      => Hash::make($request->password),
            'language_id'   => $request->language,
            'customer_id'   => $request->customer,
            'role'          => 'user'//customer
        ]);

        // Mail::send('email', [   'Username' => $request->username,
        //                         'Password' => $request->password
        //                     ],
        //                     function ($message) {   $message->from('sanjay.chaudhary@techinventive.com');
        //                                             $message->to('sanjay.chaudhary@techinventive.com')
        //                                                     ->subject('Login Access');
        //                                         }
        //             );

        $request->session()->flash('user', 'user created sucessfully');
        return redirect('registration');
    }

    //Dashboard
    public function dashboard()
    {
        if(Auth::check()){
            $id = Auth::user()->id;
            $user = User::where(['id'=>$id])->first();
            if($user->role == 'admin'){
                return view('dashboard');
            }
            else{
                return view('user/userProfile');
            }
        }
    }

    //User Profile
    public function userProfile()
    {
        if(Auth::check()){
            $id = Auth::user()->id;
            $user = User::where(['id'=>$id])->first();
            return view('user/userProfile');
        }
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
        $values = User::with('language')->with('customer')->paginate(10);
        // echo '<pre>';
        // print_r($values);
        // die;
        return view('accessManagement/list', ['values' => $values]);
    }

    //Edit Registration
    public function editRegistration(Request $request, $id){
        $data = [];
        if($id != ''){
            $data['id'] = $id;
            $data['type'] = 'Edit Access User';
            $data['button'] = 'Update';
            $data['user'] = User::where(['id'=>$id])->first();
            $data['languages'] = DB::table('languages')->get();
            $data['customers'] = DB::table('customers')->get();
        }

        if($request->method() == 'POST'){
            
            Validator::make($data, [
                'email' => [
                    'required',
                    'email',
                    Rule::unique('access_managements')->ignore($id),
                ],
                'username' => [
                    'required',
                    Rule::unique('access_managements')->ignore($id),
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
                'username'      => $request->username,
                'password'      => Hash::make($request->password),
                'language_id'   => $request->language,
                'customer_id'   => $request->customer,
            ];

            if($id != ''){
                User::where('id',$id)->update($response);
                $request->session()->flash('message','User Updated Successfully');
                return redirect('access-list');
            }
        }
        return view('accessManagement/registration', $data);
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
