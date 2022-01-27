<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginAccess;
use App\Mail\ForgetAccess;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class MailController extends Controller
{
    //
    public function sendEmail(Request $request, $id) {
        $user = User::where(['id'=>$id])->first();
        $email = $user->email;
        // $password = Hash::needsRehash($user->password);
        $mailData = [
            'email'     => $email,
            'password'  => $user->pass
        ];
  
        Mail::to($email)->send(new LoginAccess($mailData));
   
        // return response()->json(['message' => 'Email has been sent.'], Response::HTTP_OK);
        if (Mail::failures()) {
            $request->session()->flash('message','Mail Sending Failed');
            return redirect('access-list');
        }else{
            $request->session()->flash('message','Mail Send Successfully');
            return redirect('access-list');
        }
    }

    public function forgetEmail(Request $request){
        $mailData = [
            'email' => $request->email
        ];
        $to = 'sanjay.chaudhary@techinventive.com';
        Mail::to($to)->send(new ForgetAccess($mailData));

        if (Mail::failures()) {
            return ['msg'=>'error'];
        }else{
            return ['msg'=>'sent'];
        }
    }
}
