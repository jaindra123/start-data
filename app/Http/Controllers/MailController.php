<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginAccess;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MailController extends Controller
{
    //
    public function sendEmail(Request $request, $id) {
        $user = User::where(['id'=>$id])->first();
        $email = $user->email;
        // $password = Hash::needsRehash($user->password);
        $mailData = [
            'username' => $user->username,
            'password' => $user->password
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
}
