<?php


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

?>