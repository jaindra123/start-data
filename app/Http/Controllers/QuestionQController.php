<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Option;
use App\Models\PersonalData;
use App\Models\Question;
use App\Models\Questionair;
use App\Models\QuestionairAndQuestionTypeModel;
use App\Models\QuestionairOtherLanguage;
use App\Models\QuestionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // return $checkQuesType;
        if($checkQuesType != ''){
            $loadedQuestion   = $questionsModel->getRecordWithOtherCondition(
                [
                    'questionair_and_questype.id as questionairTypeId',
                    'questionair_and_questype.ques_type_id as quesTypeId',
                    'questions.id as questionId',
                    'questions.question as questionName',
                    'questions.language_count as languageCount',
                ],
                [
                    ['questions.status','<>',2],
                    ['questionair_and_questype.status','<>',2],
                    'first_data_or_not'=>1,
                    'std_qns'   =>1,
                    'questionair_and_questype.ques_type_id'=>$request->questionTypeId,
                ]
            );
            return response()->json([
                'success'   =>  true,
                'message'   =>  'Question Type ',
                'data'      =>  $loadedQuestion,
            ]);
        }
        $data = [
            'questionair_id'    =>      $questionairId,
            'ques_type_id'      =>      $request->questionTypeId,
            'status'            =>      1
        ];
        $insertedData = $questioanairWithTypeModel->insertRecord($data);

        $loadedQuestion   = $questionsModel->getRecordWithOtherCondition(
            [
                'questionair_and_questype.id as questionairTypeId',
                'questionair_and_questype.ques_type_id as quesTypeId',
                'questions.id as questionId',
                'questions.question as questionName',
                'questions.language_count as languageCount',
            ],
            [
                ['questions.status','<>',2],
                ['questionair_and_questype.status','<>',2],
                'first_data_or_not'=>1,
                'std_qns'   =>1,
                'questionair_and_questype.ques_type_id'=>$request->questionTypeId,
            ]
        );

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
        $questioanairWithTypeModel = new QuestionairAndQuestionTypeModel();
        $personalDataModel = new PersonalData();


        $questionair_and_type = $questioanairWithTypeModel->getSingleRecordWithCondition(['id'=>$questionairTypeId]);
        
        $data = $request->all();
        // return $data;
        if($questionair_and_type->ques_type_id < 10 ){
            if(in_array(null,$data['questionData']['display_texts'], true)){
                return array('error'=>'All Display Field are required according to all languages');
            }
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
        $langCount = 0;
        for($i=0; $i < count($data__); $i++){
            
            if($data['questionData']['selectedStatusOfLang'][$i] == 'deactivate'){
                $langCount++;
            }
        }
        for($i=0; $i < count($data__); $i++){
           
            $data_ = [
                'page_id'                           =>                  $data['questionData']['page_id'],
                'questionair_id'                    =>                  $questionair_and_type->questionair_id,
                'question_type_id'                  =>                  $questionair_and_type->ques_type_id,
                'questionair_type_id'               =>                  $data['questionData']['questionair_type_id'],
                'question'                          =>                  $data__[$i],
                'language_id'                       =>                  $data['questionData']['language_id'][$i],
                'language_count'                    =>                  (count($data__)- $langCount),   
                'lang_code'                         =>                  NULL,
                'mandatory'                         =>                  $data['questionData']['mandatory'],
                'max_ans_size'                      =>                  $data['questionData']['max_ans_size'],
                'number_unit'                       =>                  $data['questionData']['unit'],
                // 'open_text_field_ans'               =>                  $data['questionData'],
                'personal_data_question_required'   =>                  $data['questionData']['personal_question'],
                'std_qns'                           =>                  $data['questionData']['std_qns'][$i],
                // 'dependent_answer'                  =>                  $data['questionData'],
                'display_texts'                     =>                  $data['questionData']['display_texts'][$i],
                // 'options'                           =>                  $data['questionData'],
                'status'                            =>                  $data['questionData']['selectedStatusOfLang'][$i] == 'deactivate' ? 0 : 1,
            ];
            $insertedRecord = $questionModel->insertRecord($data_);
            if($insertedRecord && $i==0){
                $data1 = $questionModel->getSingleRecord(['id'=>$insertedRecord->id]);
                $data1->first_data_or_not=1;
                $data1->save();
            }
        }
        if($data['questionData']['personal_question'] == 1){
            $personalDataModel->insertRecord([
                'questionair_id'        =>      $questionair_and_type->questionair_id,
                'questionTitle'         =>      $data['questionData']['personalQuestionTitle'],
                'status'                =>      1
            ]);
        }
        return response()->json(['success'=>true, 'message'=>'Question Added Successfully']);
    }


    public function get_question(Request $request) { 
        
        // return $request->quesId;
        $questionModel = new Question();
        $questioanairWithTypeModel = new QuestionairAndQuestionTypeModel();

        $questions = $questionModel->getSingleRecord(['id'=>$request->quesId]);
        // return $questions;

        $quesWithOtherLang = $questionModel->getRecordAfterId(
            [
                'questionair_and_questype.id as questionairTypeId',
                'questionair_and_questype.ques_type_id as quesTypeId',
                'questions.id as questionId',
                'questions.question as questionName',
                'questions.display_texts as displayText',
                'questions.std_qns as stdAns',
                'questions.language_id as languageId',
            ],
            [
               [ 'questions.id','>=',$request->quesId]
            ], $questions->language_count);
        return $quesWithOtherLang;   
    }

    public function save_scale_question_type(Request $request, $questionairTypeId, $pageNo = 1){
        // return $request->all();

        $questionModel = new Question();
        $questioanairWithTypeModel = new QuestionairAndQuestionTypeModel();
        $optionModel =  new Option();

        $questionair_and_type = $questioanairWithTypeModel->getSingleRecordWithCondition(['id'=>$questionairTypeId]);
        
        $data = $request->all();
        
        if(in_array(null,$data['questionData']['question'], true)){
            return array('error'=>'All Question Name Field are required according to all languages');
        }
        if(in_array(null,$data['questionData']['display_texts'], true)){
            return array('error'=>'All Display Field are required according to all languages');
        }
        if(in_array(null,$data['questionData']['scale_des'], true)){
            return array('error'=>'All Scale Description Field are required according to all languages');
        }

        $total_options = $data['questionData']['total_option'];
        $insertedId =[];

        $data__=  ($data['questionData']['question']);
        $langCount = 0;
        for($i=0; $i < count($data__); $i++){
            
            if($data['questionData']['selectedStatusOfLang'][$i] == 'deactivate'){
                $langCount++;
            }
        }
        for($i=0; $i < count($data__); $i++){
           
            $data_ = [
                'page_id'                           =>                  $data['questionData']['page_id'],
                'questionair_id'                    =>                  $questionair_and_type->questionair_id,
                'question_type_id'                  =>                  $questionair_and_type->ques_type_id,
                'questionair_type_id'               =>                  $data['questionData']['questionair_type_id'],
                'question'                          =>                  $data__[$i],
                'language_id'                       =>                  $data['questionData']['language_id'][$i],
                'language_count'                    =>                  (count($data__)- $langCount),   
                'lang_code'                         =>                  NULL,
                'mandatory'                         =>                  $data['questionData']['mandatory'],
                'max_ans_size'                      =>                  $data['questionData']['max_ans_size'],
                // 'number_unit'                       =>                  $data['questionData']['unit'],
                'open_text_field_ans'               =>                  $data['questionData']['no_answer'],
                // 'personal_data_question_required'   =>                  $data['questionData']['personal_question'],
                'std_qns'                           =>                  $data['questionData']['std_qns'][$i],
                // 'dependent_answer'                  =>                  $data['questionData'],
                'display_texts'                     =>                  $data['questionData']['display_texts'][$i],
                // 'options'                           =>                  $data['questionData'],
                'scale_discription'                 =>                  $data['questionData']['scale_des'][$i],
                'status'                            =>                  $data['questionData']['selectedStatusOfLang'][$i] == 'deactivate' ? 0 : 1,
            ];
            $insertedRecord = $questionModel->insertRecord($data_);
            if($insertedRecord && $i==0){
                $data1 = $questionModel->getSingleRecord(['id'=>$insertedRecord->id]);
                $data1->first_data_or_not=1;
                $data1->save();
            }
            $insertedId[]=$insertedRecord->id;
        }
        $k=0;
        foreach($insertedId as $key => $value){
            $k = $key;
           
            if($k == 0){
                $data__ = [
                    'questions_id'  =>  $insertedId[$k],
                    'option'  =>  $data['questionData']['answerName'][$k],
                    'display_text'  =>  $data['questionData']['ansdisplayText'][$k],
                    'std_opt'  =>  $data['questionData']['optionStar'][$k],
                ];
                $optionModel->insertRecord($data__);
                $data1__ = [
                    'questions_id'  =>  $insertedId[$k],
                    'option'  =>  $data['questionData']['answerName'][$k+1],
                    'display_text'  =>  $data['questionData']['ansdisplayText'][$k+1],
                    'std_opt'  =>  $data['questionData']['optionStar'][$k+1],
                ];
                $optionModel->insertRecord($data1__);
                                                                   
            }
            else{
                $data2__ = [
                    'questions_id'  =>  $insertedId[$k],
                    'option'  =>  $data['questionData']['answerName'][$k*2],
                    'display_text'  =>  $data['questionData']['ansdisplayText'][$k*2],
                    'std_opt'  =>  $data['questionData']['optionStar'][$k*2],
                ];
                $optionModel->insertRecord($data2__);
                $data3__ = [
                    'questions_id'  =>  $insertedId[$k],
                    'option'  =>  $data['questionData']['answerName'][$k*2+1],
                    'display_text'  =>  $data['questionData']['ansdisplayText'][$k*2+1],
                    'std_opt'  =>  $data['questionData']['optionStar'][$k*2+1],
                ];
                $optionModel->insertRecord($data3__);
                // echo $data['questionData']['ansdisplayText'][$k*2];
                // echo $data['questionData']['answerName'][$k*2+1];
            }
            // echo '<br>';
        }
       
        return response()->json(['success'=>true, 'message'=>'Question Added Successfully','data'=>$insertedId]);
    }
}
