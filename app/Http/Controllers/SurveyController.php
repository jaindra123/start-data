<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionair;
use App\Models\QuestionairOtherLanguage;
use App\Models\Question;
use App\Models\SurveyAnswer;

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

    public function survey(Request $request, $qid, $lid, $pid = 1){
        
        if($request->all()){
            $questionair_id = $qid;
            $lang_id = $lid;
            $page_id = $pid-1;
            $arr = [];
            $inserID = 0;
            $other = $other_answer = $checked = $otherAnswer = '';
            foreach($request->all() as $key => $datas){
                if(is_array($datas)){
                    $k = $key;
                    $implode_datas = implode(',',$datas);
                    $arr[$key] = $implode_datas;
                    $submitentry = SurveyAnswer::Create([
                        'questionair_id'    => $questionair_id,
                        'language_id'       => $lang_id,
                        'page_id'           => $page_id,
                        'question_id'       => $key,
                        'answer'            => $implode_datas,
                    ]);
                    $inserID = $submitentry->id;
                    // $other = 'other_'.$key;
                    $other_answer = 'input_'.$key;
                }

                /*
                if($other == $key){
                    $checked = 1;
                }*/

                // if($checked == 1){
                    if($other_answer == $key){
                        if(!empty($request->all()[$key])){
                            $otherAnswer = $request->all()[$key];
                            $otherData = ['other_answer' => $otherAnswer];
                            SurveyAnswer::where(['id'=>$inserID])->update($otherData);
                        }
                        // $checked = 0;
                    }
                // }
            }
        }
        
        if($request->Finish == "Finish"){
            return redirect('survey-end/'.$qid.'/'.$lid);
        }

        $data['questionair'] = Questionair::where([['id',$qid],['status', '1'],['is_publish', '1']])->first();
        $data['questionairs'] = QuestionairOtherLanguage::where([['questiaonair_id',$qid],['language_id',$lid],['status', '1']])->get();
        $data['question'] = Question::with('option')->with('questiontype')->where([['questionair_id', $qid], ['language_id', $lid], ['page_id', $pid], ['status', '1']])->get();
        $data['min'] = Question::where([['questionair_id', $qid], ['language_id', $lid], ['status', '1']])->min('page_id');
        $data['max'] = Question::where([['questionair_id', $qid], ['language_id', $lid], ['status', '1']])->max('page_id');
        $data['current'] = $pid;
        $data['nxt'] = $pid+1;
        // echo '<pre>';
        // print_r($data['max']);
        // die;
        return view('frontend.web', $data);
    }

    public function surveyEnd($qid, $lid){
        $data['questionair'] = Questionair::where([['id',$qid],['status', '1'],['is_publish', '1']])->first();
        $data['questionairs'] = QuestionairOtherLanguage::where([['questiaonair_id',$qid],['language_id',$lid],['status', '1']])->get();
        return view('frontend.survey-end', $data);
    }
}
