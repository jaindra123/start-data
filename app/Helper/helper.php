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

function getLanguage($id){
    $data = DB::table('languages')->where('deleted_at',NULL)->where('id',$id)->first();
    return $data;

}  

function langSessionDestroy(){
    if(session()->has('ques_lang')){
        session()->forget('ques_lang');
    }
}

function getLanguageIdFromSession(){
    if(session()->has('ques_lang')){
        $data = session()->get('ques_lang');
        $langData =array();
        
        return $data;
    }
}

function getDateTime($datetime)
{
    $str = strtotime($datetime);

    return date('d M, Y h:i:s', $str);
}

function changeNewsDateFormat($datetime)
{
    $str = strtotime($datetime);

    return date('jS F Y', $str);
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


function encrypt_decrypt($string, $action = 'encrypt')
{
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'AA74CDCC2BBRT935136HH7B63C27'; // user define private key
    $secret_iv = '5fgf5HJ5g27'; // user define secret key
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16); // sha256 is hash_hmac_algo
    if ($action == 'encrypt') {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if ($action == 'decrypt') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

?>