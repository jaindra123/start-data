<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Option;
use App\Models\PersonalData;
use App\Models\Question;
use App\Models\Questionair;
use App\Models\QuestionairAndQuestionTypeModel;
use App\Models\QuestionairOtherLanguage;
use App\Models\QuestionDependency;
use App\Models\QuestionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionQController extends Controller{


    public function index(Request $request, $id, $pageNo=1 ){

        $request->session()->forget('ques_position');
        $questionTypeModel  =new  QuestionType();
        $questionairModel = new Questionair();
        $questionairOtherLanguageModel = new QuestionairOtherLanguage();
        $questionsModel = new Question();
        $languageModel = new Language();
        $questioanairWithTypeModel = new QuestionairAndQuestionTypeModel();
        $questionDependencyModel= new QuestionDependency();

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
                'questions.page_id as page_id',
                'questions.question_no_order as question_no_order',
                // 'questions.',
                // 'questions',
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
        $langCount = $questionairOtherLanguageModel->getCountWithCondition(['questiaonair_id'=>$questionairId]);
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

        $data['questionair'] = $questionair;
        $data['langCount'] = $langCount;

        
        // return $data['langCount'];



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
                'questionairTypeId' => $checkQuesType->id,
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
                'success'   =>  'success',
                'message'   =>  'Question Type ',
                'data1'=> $insertedData->id
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
            
            // if($data['questionData']['selectedStatusOfLang'][$i] == 'deactivate'){
                $langCount++;
            // }
        }
        $last_question_no = $questionModel->join('questionair_and_questype','questionair_and_questype.id','=','questions.questionair_type_id')
            ->where('questions.status','<>',2)
            ->where('questions.deleted_at', NULL)
            ->take(1)->orderBy('questions.question_no_order','DESC')
            ->where('questions.page_id',$pageNo)
            ->where('questionair_type_id',$questionairTypeId)
            ->get();
        // return $last_question_no[0]['question_no_order'];

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
            if(sizeof($last_question_no) > 0){
                $questionModel->where(['id'=>$insertedRecord->id, 'page_id'=>$insertedRecord->page_id])->where('status','<>',2)->update([
                    'question_no_order'     =>      $last_question_no[0]['question_no_order']+1,
                ]);
    
            }else{
                $questionModel->where(['id'=>$insertedRecord->id, 'page_id'=>$insertedRecord->page_id])->where('status','<>',2)->update([
                    'question_no_order'     =>      1,
                ]);
    
            }
            
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
        $optionModel = new Option();

        // $option = [];
        $questionWithOption = [];
        $questions = $questionModel->getSingleRecord(['id'=>$request->quesId]);
        // return $questions;

        $quesWithOtherLang = $questionModel->getRecordAfterId1(
            [
                'questionair_and_questype.id as questionairTypeId',
                'questionair_and_questype.ques_type_id as quesTypeId',
                'questions.id as questionId',
                'questions.question as questionName',
                'questions.display_texts as displayText',
                'questions.std_qns as stdAns',
                'questions.language_id as languageId',
                'questions.scale_discription as scale_description',
                // 'options.option as option_name',
                // 'options.display_text as display_text',
                // 'options.std_opt as std_ans',
                // 'options.is_dependent as option_dep',
                // 'options.axis'

            ],
            [
               [ 'questions.id','>=',$request->quesId]
            ], $questions->language_count);

            foreach($quesWithOtherLang as $row){
                $option = $optionModel->getRecordWithCondition(['questions_id'=>$row->questionId]);
                if(sizeof($option) > 0){
                    $row->options = $option;
                }else{
                    $row->options = [];
                }

                $questionWithOption[][]= $row;
            }
        return ['questionTitle'=>$questionWithOption,'option'=> $questionWithOption];   
    }

    public function save_scale_question_type(Request $request, $questionairTypeId, $pageNo = 1){
        
        $questionModel = new Question();
        $questioanairWithTypeModel = new QuestionairAndQuestionTypeModel();
        $optionModel =  new Option();
        $dependencyModel =new QuestionDependency();

        $data = $request->all();
       
        // return $request->all();

        //  $request->all();


        $questionair_and_type = $questioanairWithTypeModel->getSingleRecordWithCondition(['id'=>$questionairTypeId]);
        
        $data = $request->all();
        if($questionair_and_type->ques_type_id == 5  || $questionair_and_type->ques_type_id == 9 ){
            $c= count($data['questionData']['language_id'])* (int)($data['questionData']['total_option']);
        }
        if($questionair_and_type->ques_type_id == 5  || $questionair_and_type->ques_type_id == 9 ){
            if(in_array(null,$data['questionData']['ansdisplayText_y'], true)){
                return array('error'=>'All y-axis Option are required according to all languages');
            }
            if(count($data['questionData']['ansdisplayText_y']) != $c){
                return array('error'=>'All y-axis Option are required according to all languages');
            }
        }
        // $arr= [count($data['questionData']['ansdisplayText_y']), $c];
       
        // return  $arr;
        if(in_array(null,$data['questionData']['question'], true)){
            return array('error'=>'All Question Name Field are required according to all languages');
        }
        if(in_array(null,$data['questionData']['display_texts'], true)){
            return array('error'=>'All Display Field are required according to all languages');
        }
        if($questionair_and_type->ques_type_id == 5 || $questionair_and_type->ques_type_id == 6  ){
            if(in_array(null,$data['questionData']['scale_des'], true)){
                return array('error'=>'All Scale Description Field are required according to all languages');
            }
        }

        // return $data;
        // $total_options = $data['questionData']['total_option'];
        $insertedId =[];
        
        $data__=  ($data['questionData']['question']);
        $langCount = 0;
        for($i=0; $i < count($data__); $i++){
            
            if($data['questionData']['selectedStatusOfLang'][$i] == 'deactivate'){
                $langCount++;
            }
        }
        $last_question_no = $questionModel->join('questionair_and_questype','questionair_and_questype.id','=','questions.questionair_type_id')
            ->where('questions.status','<>',2)
            ->where('questions.deleted_at', NULL)
            ->take(1)->orderBy('questions.question_no_order','DESC')
            ->where('questions.page_id',$pageNo)
            ->where('questionair_type_id',$questionairTypeId)
            ->get();
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
                'scale_discription'                 =>                   $questionair_and_type->ques_type_id == 9||$questionair_and_type->ques_type_id == 2 || $questionair_and_type->ques_type_id == 1 || $questionair_and_type->ques_type_id == 8 ? NULL : $data['questionData']['scale_des'][$i],
                'status'                            =>                  $data['questionData']['selectedStatusOfLang'][$i] == 'deactivate' ? 0 : 1,
            ];
            $insertedRecord = $questionModel->insertRecord($data_);
            if(sizeof($last_question_no) > 0){
                $questionModel->where(['id'=>$insertedRecord->id, 'page_id'=>$insertedRecord->page_id])->where('status','<>',2)->update([
                    'question_no_order'     =>      $last_question_no[0]['question_no_order']+1,
                ]);
    
            }else{
                $questionModel->where(['id'=>$insertedRecord->id, 'page_id'=>$insertedRecord->page_id])->where('status','<>',2)->update([
                    'question_no_order'     =>      1,
                ]);
    
            }
            if($insertedRecord && $i==0){
                $data1 = $questionModel->getSingleRecord(['id'=>$insertedRecord->id]);
                $data1->first_data_or_not=1;
                $data1->save();
            }
            $insertedId[]=$insertedRecord->id;
        }
        if($questionair_and_type->ques_type_id == 5 || $questionair_and_type->ques_type_id == 6 ){
            $k=0;
            foreach($insertedId as $key => $value){
                $k = $key;
                for($i = 0; $i < count($data['questionData']['answerName'])/count($insertedId); $i++){
                    if($k == 0){
                        $data__ = [
                            'questions_id'  =>  $insertedId[$k],
                            'option'  =>  $data['questionData']['answerName'][$k+$i],
                            'display_text'  =>  $data['questionData']['ansdisplayText'][$k+$i],
                            'std_opt'  =>  $data['questionData']['optionStar'][$k+$i],
                        ];
                        $optionModel->insertRecord($data__);
                                                                        
                    }
                    else{
                        $data2__ = [
                            'questions_id'  =>  $insertedId[$k],
                            'option'  =>  $data['questionData']['answerName'][$k*2+$i],
                            'display_text'  =>  $data['questionData']['ansdisplayText'][$k*2+$i],
                            'std_opt'  =>  $data['questionData']['optionStar'][$k*2+$i],
                        ];
                        $optionModel->insertRecord($data2__);
                    }
                }
            }
        }
        if($questionair_and_type->ques_type_id == 5  ||$questionair_and_type->ques_type_id ==9 ){
            $l=0;
            for($z=0;$z<count($insertedId);$z++){
           
                for($j = 0; $j < count($data['questionData']['ansdisplayText_y'])/count($insertedId); $j++){
                    $data__ = [
                        'questions_id'  =>  $insertedId[$z],
                        'option'  =>  $data['questionData']['answerName_y'][$l],
                        'display_text'  =>  $data['questionData']['ansdisplayText_y'][$l],
                        'std_opt'  =>  $data['questionData']['optionStar_y'][$l],
                        'axis'      => $questionair_and_type->ques_type_id == 5 ? 'y' : 'x'
                        ];
                    $optionModel->insertRecord($data__);   
                    $l++;
                }
            }       
        }
        if($questionair_and_type->ques_type_id == 2 || $questionair_and_type->ques_type_id == 1|| $questionair_and_type->ques_type_id == 8){
            $l=0;
            $optionId =[];
            $getDependentAnswer = [];
            $getQuesWithLang = [];
            $dependentData =[];
            $questions_ =[];
            $questionIDLatest =[];
            for($z=0;$z<count($insertedId);$z++){
           
                for($j = 0; $j < count($data['questionData']['ansdisplayText_y'])/count($insertedId); $j++){
                    $data__ = [
                        'questions_id'  =>  $insertedId[$z],
                        'option'  =>  $data['questionData']['answerName_y'][$l],
                        'display_text'  =>  $data['questionData']['ansdisplayText_y'][$l],
                        'std_opt'  =>  $data['questionData']['optionStar_y'][$l],
                        'axis'      => 'x',
                        'is_dependent'=>$data['questionData']['dependency'][$l],
                        ];
                    $optionId[] = $optionModel->insertRecord($data__);   
                    $l++;
                }
            }   

            

            foreach($insertedId as $m){
                $depData = $optionModel->getRecordWithCondition(['questions_id'=>$m,'is_dependent'=>1]);
                $getDependentAnswer[] = $depData;
            }
            // return $getDependentAnswer;
            for($f=0; $f < count($getDependentAnswer); $f++){
                for($h=0; $h<count($depData); $h++){
                    $dataD = [
                        'option_id'             =>      $getDependentAnswer[$f][$h]['id'],
                        'question_id'           =>      $getDependentAnswer[$f][$h]['questions_id'],
                        'question_type_id'      =>      $questionair_and_type->ques_type_id,
                        'question_dependent_id' =>      $getDependentAnswer[$f][$h]['questions_id'],
                        'dependency'            =>      $data['questionData']['dependencyCheck'],
                        'answer_name'           =>      $getDependentAnswer[$f][$h]['option'],
                        'dependecy_logic'       =>      isset($data['questionData']['dependencyLogic']) ? $data['questionData']['dependencyLogic'] : '',
                        'status'                =>      1,
                    ];
                    $dependentData[] = $dependencyModel->insertRecord($dataD);
                }
            }

            foreach($insertedId as $g){
                $getQuesWithLang[] = $questionModel->getSingleRecord(['id'=>$g]);
            }
            $c = 0;
            for($p = 0; $p <count($getQuesWithLang); $p++ ){
                $dependencyModel->where('question_id', $getQuesWithLang[$c]['id'])->update([
                    'language_id'   =>    $getQuesWithLang[$c]['language_id']  
                ]);
                $c++;
            }
            // return $dependentData;
            if(isset($data['questionData']['selectedDependecy'])){
                if(sizeof($data['questionData']['selectedDependecy']) > 0){
                    foreach($data['questionData']['selectedDependecy'] as $n){
                        $getSelectDependentAnswer[] = $dependencyModel->getSingleRecord(['id'=>$n]);
                        // $getSelectDependentAnswer[] = $depSelectData;

                    }
                        //     for($f_=0; $f_ < count($getSelectDependentAnswer); $f_++){
                        //         for($h_=0; $h_<count($depSelectData); $h_++){
                        //             $dataD = [
                        //                 'option_id'             =>      $getSelectDependentAnswer[$f_][$h_]['id'],
                        //                 'question_id'           =>      $getSelectDependentAnswer[$f_][$h_]['questions_id'],
                        //                 'question_type_id'      =>      $questionair_and_type->ques_type_id,
                        //                 'dependency'            =>      $data['questionData']['dependencyCheck'],
                        //                 'answer_name'           =>      $getSelectDependentAnswer[$f_][$h_]['option'],
                        //                 'dependecy_logic'       =>      isset($data['questionData']['dependencyLogic']) ? $data['questionData']['dependencyLogic'] : '',
                        //                 'status'                =>      1,
                        //             ];
                        //             $dependentDataId_ = $dependencyModel->insertRecord($dataD);
                        //             $dependentData_[]  = $dependentDataId_->id;
                        //         }
                        //     }
                        //     foreach($dependentData_ as $co){
                        //         $getQuesWithLang_[] = $questionModel->getSingleRecord(['id'=>$co]);
                        //     }
                        //     $c_ = 0;
                        //     for($p = 0; $p <count($getQuesWithLang_); $p++ ){
                        //         $dependencyModel->where('question_id', $getQuesWithLang_[$c_]['id'])->update([
                        //             'language_id'   =>    $getQuesWithLang_[$c_]['language_id']  
                        //         ]);
                        //         $c_++;
                        //     }
                        // $k__= 0;
                        // for($j_=0; $j_ < count($insertedId); $j_){
                        //     // for($f_=0; $f_ < count($getSelectDependentAnswer); $f_++){
                        //     $questionID = $questionModel->getSingleRecord(['language_id'=>$getSelectDependentAnswer[$k__]['language_id'], 'id'=>$insertedId[$j_]]);
                        //     $questionIDLatest[] = $questionID;
                        //     $k__++;
                        // }
                        $k_ = 0;
                    foreach($insertedId as $row_){
                        $questions_[] = $questionModel->getSingleRecord(['id'=>$row_]); 
                    }
                    for($mn=0; $mn < count($questions_); $mn++){
                        for($l=0; $l< count($getSelectDependentAnswer); $l++){
                            if($getSelectDependentAnswer[$l]['language_id']== $questions_[$mn]['language_id']){
                                $data__ = [
                                    'option_id'             =>      $getSelectDependentAnswer[$l]['option_id'],
                                    'language_id'           =>      $getSelectDependentAnswer[$l]['language_id'],
                                    'question_id'           =>      $getSelectDependentAnswer[$l]['question_id'],
                                    'question_type_id'      =>      $questionair_and_type->ques_type_id,
                                    'question_dependent_id' =>      $questions_[$mn]['id'],
                                    'dependency'            =>      $data['questionData']['dependencyCheck'],
                                    'answer_name'           =>      $getSelectDependentAnswer[$l]['answer_name'],
                                    'dependecy_logic'       =>      isset($data['questionData']['dependencyLogic']) ? $data['questionData']['dependencyLogic'] : '',
                                    'status'                =>      1,
                                ];
                                $dependencyModel->insertRecord($data__);
                            }
                        }
                    }
                }
            }
            // return $questionIDLatest;
        }
        return response()->json(['success'=>true, 'message'=>'Question Added Successfully','data'=>$insertedId]);
    }

    public function save_ques_position (Request $request){
        // $request->session()->forget('ques_position');
        $posSession =[];
         $data = $request->all();
        //  return $data['questionPositionData']['current_ques_no'];
        if($request->session()->has('ques_position')){
            $posSession = $request->session()->get('ques_position');
            foreach($posSession as $row){
                foreach($row  as $col){
                    if($col['current_ques_no'] == $data['questionPositionData']['current_ques_no']){
                        $data['questionPositionData']['current_ques_no'] = $col['swap_ques_no'];
                        $data['questionPositionData']['current_ques_id'] = $col['swap_ques_id'];
                    }elseif($col['swap_ques_no'] == $data['questionPositionData']['swap_ques_no']){
                        $data['questionPositionData']['swap_ques_no']=$col['current_ques_no'];
                        $data['questionPositionData']['swap_ques_id'] = $col['current_ques_id'];
                    }
                    
                }
            }
            $posSession[]=$data;
            // return $posSession;
            $request->session()->put('ques_position',$posSession);
        }else{
            $posSession[] = $request->all();
            $request->session()->put('ques_position', $posSession);
        }
        $sessionData = $request->session()->get('ques_position');

        return response()->json(['success'=>true, 'data'=>$sessionData]);   
    }

    public function save_ques_draft(Request $request){
        $questionsModel = new Question();
        $otherLang =[];
        $swapQues = [];

        if($request->session()->has('ques_position')){
            $sessionData_ = $request->session()->get('ques_position');
            foreach($sessionData_ as $row){
                $languageCountC = $questionsModel->getSingleRecord(['id'=>$row['questionPositionData']['current_ques_id']]);
                $languageCountS = $questionsModel->getSingleRecord(['id'=>$row['questionPositionData']['swap_ques_id']]);

                $currentQues = $questionsModel->where([
                    'id'=>$row['questionPositionData']['current_ques_id'],
                    'deleted_at' =>  NULL
                ])->update([
                    'question_no_order' =>  $row['questionPositionData']['swap_ques_no']
                ]);

                $questionsModel->where([
                    ['id', '>=',      $row['questionPositionData']['current_ques_id']],
                        'deleted_at' =>  NULL
                    ])
                    ->take($languageCountC->language_count)->update(['question_no_order' =>  $row['questionPositionData']['swap_ques_no']]); 
                

                $swapQues = $questionsModel->where([
                    'id'=>$row['questionPositionData']['swap_ques_id'],
                    'deleted_at' =>  NULL
                ])->update([
                    'question_no_order' =>  $row['questionPositionData']['current_ques_no']
                ]);

                $questionsModel->where([
                    ['id', '>=',      $row['questionPositionData']['swap_ques_id']],
                        'deleted_at' =>  NULL
                    ])
                    ->take($languageCountS->language_count)->update(['question_no_order' =>  $row['questionPositionData']['current_ques_no']]); 
                
            }
            return response()->json(['success'=>true, 'data'=>[$currentQues, $swapQues]]);
        }
    }
    
}
