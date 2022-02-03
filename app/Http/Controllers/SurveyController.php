<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionair;
use App\Models\QuestionairOtherLanguage;

class SurveyController extends Controller
{
    //
    public function surveyStart($qid, $lid){
        $data['questionair'] = Questionair::where([['id',$qid],['status', '1'],['is_publish', '1']])->first();
        $data['questionairs'] = QuestionairOtherLanguage::where([['questiaonair_id',$qid],['language_id',$lid],['status', '1']])->get();
        $data['lang'] = QuestionairOtherLanguage::where([['questiaonair_id',$qid],['status', '1']])->get();
        $data['language'][] = $data['questionair']->language_id;
        foreach($data['lang'] as $value){
            $data['language'][] = $value->language_id;
        }
        return view('frontend.survey-start', $data);
    }

    public function survey($qid, $lid){
        $data['questionair'] = Questionair::where([['id',$qid],['status', '1'],['is_publish', '1']])->first();
        $data['questionairs'] = QuestionairOtherLanguage::where([['questiaonair_id',$qid],['language_id',$lid],['status', '1']])->get();
        // print_r($data['questionairs']);
        // die;
        return view('frontend.web', $data);
    }

    public function surveyEnd($qid, $lid){
        $data['questionair'] = Questionair::where([['id',$qid],['status', '1'],['is_publish', '1']])->first();
        $data['questionairs'] = QuestionairOtherLanguage::where([['questiaonair_id',$qid],['language_id',$lid],['status', '1']])->get();
        return view('frontend.survey-end', $data);
    }
}
