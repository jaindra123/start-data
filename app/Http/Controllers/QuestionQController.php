<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Question;
use App\Models\Questionair;
use App\Models\QuestionairAndQuestionTypeModel;
use App\Models\QuestionairOtherLanguage;
use App\Models\QuestionType;
use Illuminate\Http\Request;

class QuestionQController extends Controller{


    public function index(Request $request, $id, $pageNo=1 ){
        $questionTypeModel  =new  QuestionType();
        $questionairModel = new Questionair();
        $questionairOtherLanguageModel = new QuestionairOtherLanguage();
        $questionsModel = new Question();
        $languageModel = new Language();
        $questioanairWithTypeModel = new QuestionairAndQuestionTypeModel();

        $questionairId = encrypt_decrypt($id,'decrypt');
        $data['questionairId'] =$questionairId;

        $data['pagNo'] = $pageNo;

        $data['language'] = $languageModel->getAllRecord();

        $data['questionType'] = $questionTypeModel->getAllRecord(['id','short_code','question_type','title']);

        $data['questionairWithType'] = $questioanairWithTypeModel->getRecordWithCondition(['questionair_id'=>$questionairId]); 

        $data['question']   = $questionsModel->getRecordWithCondition(
            [
                'questionair_and_questype.id as questionairTypeId',
                'questionair_and_questype.ques_type_id as quesTypeId',
                'questions.id as questionId',
                'questions.question as questionName',
            ],
            [
                ['questions.status','<>',2],
                ['questionair_and_questype.status','<>',2],
                'page_id'=>$pageNo,
                'first_data_or_not'=>1,
                'questionair_and_questype.questionair_id' => $questionairId
            ]
        );

        // return $data['question'];
        $questionairData = $questionairModel->getAllRecordWithCondition(['questionairs.id'=>$questionairId]);
        $questionair = array();
        if($questionairData){
            foreach($questionairData as $row){
                $quesLang = $questionairOtherLanguageModel->getRecordWithCondition(['questiaonair_id'=>$row->id]);
                if(!empty($quesLang)){
                    $row->quesLanguage = $quesLang; 
                }else{
                    $row->quesLanguage = [];
                }
                $questionair[] = $row;
            }
        }

        $data['loadQuestion'] = '';
        /** Pending Load Question */

        $data['questionair'] = $questionair;

        return view('questionairQuestions.show',compact('data'));
    }

    public function store_question(Request $request, $questionairId, $pageNumber){
        
        // return $request->all();

        if(!isset($request->questionTypeId)){
            return route('questions',$questionairId, $pageNumber);
        }

        $questioanairWithTypeModel = new QuestionairAndQuestionTypeModel();
        $questionsModel = new Question();

        $checkQuesType = $questioanairWithTypeModel->getSingleRecordWithCondition(['questionair_id'=>$questionairId,'ques_type_id'=>$request->questionTypeId]);
        if($checkQuesType != ''){
            return response()->json([
                'success'   =>  true,
                'message'   =>  'Question Type '
            ]);
        }
        $data = [
            'questionair_id'    =>      $questionairId,
            'ques_type_id'      =>      $request->questionTypeId,
            'status'            =>      1
        ];
        $insertedData = $questioanairWithTypeModel->insertRecord($data);
        if($insertedData){
            return response()->json([
                'success'   =>  true,
                'message'   =>  'Question Type '
            ]);
        }
    }

    public function store_question_details(Request $request, $questionairTypeId, $pageNo = 1){
        // return $request->all();
        $questionModel = new Question();

        $data = $request->all();
        if(in_array(null,$data['questionData']['display_texts'], true)){
            return array('error'=>'All Display Field are required according to all languages');
        }

        if(in_array(null,$data['questionData']['question'], true)){
            return array('error'=>'All Question Name Field are required according to all languages');
        }
        
        if($data['questionData']['personal_question']==1){
            $personalQuesTitle = $data['questionData']['personalQuestionTitle'];
            if($personalQuesTitle == null && $personalQuesTitle == ''){
                return array('error' => 'Personal Question Field required');
            }
        }
       
        $data__=  ($data['questionData']['question']);
    // 
        for($i=0; $i < count($data__); $i++){
            $data_ = [
                'page_id'                           =>                  $data['questionData']['page_id'] ,
                'questionair_type_id'               =>                  $data['questionData']['questionair_type_id'],
                'question'                          =>                  $data__[$i],
                'language_id'                       =>                  $data['questionData']['language_id'][$i],
                'lang_code'                         =>                  NULL,
                'mandatory'                         =>                  $data['questionData']['mandatory'],
                'max_ans_size'                      =>                  $data['questionData']['max_ans_size'],
                // 'number_unit'                       =>                  $data['questionData'],
                // 'open_text_field_ans'               =>                  $data['questionData'],
                'personal_data_question_required'   =>                  $data['questionData']['personal_question'],
                'std_qns'                           =>                  $data['questionData']['std_qns'][$i],
                // 'dependent_answer'                  =>                  $data['questionData'],
                'display_texts'                     =>                  $data['questionData']['display_texts'][$i],
                // 'options'                           =>                  $data['questionData'],
                'status'                            =>                  1,
            ];
            $insertedRecord = $questionModel->insertRecord($data_);
            if($insertedRecord && $i==0){
                $data1 = $questionModel->getSingleRecord(['id'=>$insertedRecord->id]);
                $data1->first_data_or_not=1;
                $data1->save();
            }
        }
        return response()->json(['success'=>true, 'message'=>'Question Added Successfully']);
    }

}
