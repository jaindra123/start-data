<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

    public function survey(Request $request, $qid, $lid, $pid = 1, $cid = 0){
        
        if($request->all()){
            // echo '<pre>';
            $customer = $cid;
            // print_r($request->all());
            // die;
            $questionair_id = $qid;
            $lang_id = $lid;
            $page_id = $pid-1;
            $arr = [];
            $inserID = 0;
            $other = $other_answer = $checked = $otherAnswer = '';
            foreach($request->all() as $key => $datas){
                if(is_array($datas)){
                    $k = $key;
                    if (in_array(NULL, $datas, true)){
                        array_pop($datas);
                    }

                    $implode_datas = implode(',',$datas);
                    
                    if(strpos($key, '_matrix_') !== false){
                        $ex = explode("_matrix_",$key);
                        $key = $ex[1];
                        $arr[$ex[1]][] = $implode_datas;
                        if(is_array($arr)){
                            $implode_datas = implode(',',$arr[$ex[1]]);
                        }
                    }else{
                        $arr[$key] = $implode_datas;
                    }

                    $submitentry = SurveyAnswer::updateOrCreate([
                        'customer_id'       => $customer,
                        'questionair_id'    => $questionair_id,
                        'language_id'       => $lang_id,
                        'page_id'           => $page_id,
                        'question_id'       => $key,
                    ],[
                        'questionair_id'    => $questionair_id,
                        'language_id'       => $lang_id,
                        'page_id'           => $page_id,
                        'question_id'       => $key,
                        'answer'            => $implode_datas,
                    ]);

                    $inserID = $submitentry->id;
                    $other_answer = 'input_'.$key;
                }

                if($other_answer == $key){
                    $otherAnswer = $request->all()[$key];
                    $otherData = ['other_answer' => $otherAnswer];
                    SurveyAnswer::where(['id'=>$inserID])->update($otherData);
                }
            }
            // print_r($arr);
            // die;
        }
        
        if($request->Finish == "Finish"){
            return redirect('survey-end/'.$qid.'/'.$lid);
        }

        $data['questionair'] = Questionair::where([['id',$qid],['status', '1'],['is_publish', '1']])->first();
        $data['questionairs'] = QuestionairOtherLanguage::where([['questiaonair_id',$qid],['language_id',$lid],['status', '1']])->get();
        // $data['question'] = Question::with('option')->with('questiontype')->where([['questionair_id', $qid], ['language_id', $lid], ['page_id', $pid], ['status', '1']])->get();
        $data['question'] = Question::with('option')->with('questionairAndQuestionTypeModel')->where([['language_id', $lid], ['page_id', $pid], ['status', '1']])->whereHas('questionairAndQuestionTypeModel', function($subQuery) use($qid){$subQuery->where("questionair_id", $qid);})->get();
        // $data['min'] = Question::where([['questionair_id', $qid], ['language_id', $lid], ['status', '1']])->min('page_id');
        // $data['max'] = Question::where([['questionair_id', $qid], ['language_id', $lid], ['status', '1']])->max('page_id');
        $data['min'] = Question::with('questionairAndQuestionTypeModel')->where([['language_id', $lid], ['status', '1']])->whereHas('questionairAndQuestionTypeModel', function($subQuery) use($qid){$subQuery->where("questionair_id", $qid);})->min('page_id');
        $data['max'] = Question::with('questionairAndQuestionTypeModel')->where([['language_id', $lid], ['status', '1']])->whereHas('questionairAndQuestionTypeModel', function($subQuery) use($qid){$subQuery->where("questionair_id", $qid);})->max('page_id');
        $data['current'] = $pid;
        $data['nxt'] = $pid+1;
        $data['customer_id'] = Session::get('customer_id');
        // echo '<pre>';
        // print_r($data['question'][0]->questionairAndQuestionTypeModel);
        // print_r($data['min']);
        // print_r($data['customer_id']);
        // die;
        return view('frontend.web', $data);
    }

    public function surveyEnd($qid, $lid){
        $data['questionair'] = Questionair::where([['id',$qid],['status', '1'],['is_publish', '1']])->first();
        $data['questionairs'] = QuestionairOtherLanguage::where([['questiaonair_id',$qid],['language_id',$lid],['status', '1']])->get();
        return view('frontend.survey-end', $data);
    }

    public function surveyPasswordCheck(Request $request){
        $activeCondition = ['id' => $request->questionair];
        $activeRecord = Questionair::where($activeCondition)->where('deleted_at',NULL)->first();
        if($request->password == $activeRecord->password_for_protected_link){
            // 8QHLEdlSTd
            // $user = SurveyAnswer::max('customer_id');
            // $user++;
            // $user = rand();
            $user = random_int(1, 999999);
            Session::put('customer_id', $user);
            return response()->json(['success' => 1, 'customer_id' => $user]);
        }else{
            return response()->json(['success' => 0, 'message' => 'You have enter incorrect password']);
        }
    }
}
