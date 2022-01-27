<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Color;
use App\Models\SystemLanguage;


function randAlphaNumericStringGenerator($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
  
    return $randomString;
}


function getAllLanguage(){
    $data = DB::table('languages')->where('deleted_at',NULL)->get();
    return $data;
}

function checkUser(){
    $user = Auth::User();
    Session::put('user', $user);
    return $user;
}

function colorData(){
    if(Auth::check()){
        $id = Auth::user()->id;
        return $data = Color::where('customer_id',$id)->first();
    }
}

function systemLanguage(){
    if(Auth::check()){
        $id = Auth::user()->id;
        return $data = SystemLanguage::where('customer_id',$id)->first();
    }
}

?>