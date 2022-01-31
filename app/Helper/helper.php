<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Color;
use App\Models\SystemLanguage;
use App\Models\Questionair;


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


function langSessionDestroy(){
    if(session()->has('ques_lang')){
        session()->forget('ques_lang');


    }
}

function getLanguageIdFromSession(){
    if(session()->has('ques_lang')){
        $data = session()->get('ques_lang');
        $langData =array();
        foreach($data as $row){
            $langData[] = $row['langS'];   

        }
        return $langData;
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

function getLanguage($value){
    $data = DB::table('languages')->where('deleted_at',NULL)->where('id',$value)->get();
    return $data;
}

function questionair($id){
    // echo $id;
    // return $data = Questionair::where([['id',$id],['status', '1'],['is_publish', '1']])->first();
    /*
    if(Auth::check()){
        $id = Auth::user()->id;
        $customer_id = Auth::user()->customer_id;
        // $customer_id = 1;
        $data = Questionair::where([['select_customer',$customer_id],['status', '1'],['is_publish', '1']])->first();
        if(!empty($data)){
            return $data;
        }
    }*/
}

?>