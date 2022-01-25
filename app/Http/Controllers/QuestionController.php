<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\QuestionType;
use App\Models\Question;
use App\Models\Option;
use App\Models\Results;
use App\Models\Survey;

class QuestionController extends Controller
{
#---------------------------- Question Type Lists -----------------------------#     
    public function index()
    {
        //$questiontypes = QuestionType::paginate(1);
        $questiontypes = QuestionType::all();
        return view('question.question-list',compact('questiontypes')); 
    }
#--------------------- Survey/edit ----------------------------#  
    public function survey($id)
    {
        $data=QuestionType::find($id);
        $questions=Questions::where('question_type_id',$id)->get();
        return view('question.details',compact('data','questions'));
    }
#----------------------------create Single Choice -----------------------------#  
    public function create()
    {
        $questiontypes = QuestionType::all();
        return view('question.single_choice_question',compact('questiontypes'));
    }
#----------------------------All Questions -----------------------------#  
    public function AllQuestionList()
    {
        $questions = Question::with('option')->with('questiontype')->get();
		//echo "<pre>";
		//print_r($questions);
        return view('question.all-questions',compact('questions'));
    }
#--------------------------- Insert Question ------------------------------#   
    public function store(Request $request) {

        $this->validate($request,[
            'question'=>'required|unique:questions,question,NULL,id,question_type_id,'.$request->question_type_id,
            'question_type_id'=>'required',
        ]);
        $data=$request->all();
        $ques= Questions::create($data);
        if(count($request->option) > 0) {
            foreach ($request->option as $item=>$v) {
                $datad=array(
                  'questions_id'=>$ques->id,
                  'option'=>$request->option[$item]
                );
                Options::insert($datad);
            }
        }
       return redirect()->back()->with('success','Data add successfully');           
    }
#--------------------------- Add More Answer ------------------------------#   
    public function AddMoreAns(Request $request) {
		$add_more_ans = new Option();
    	$add_more_ans->questions_id = $request->question_type_id;
    	$add_more_ans->option = $request->add_more_ans;
    	$add_more_ans->save();
		//print_r($add_more_ans);
       return response()->json(['success' => true,'message'=>'Add More Ans successfully']);
	}

#--------------------------- Delete --------------------------------------#
    public function destroy(Request $request)
    {
  
    }
 #---------------------------  --------------------------------------#     
    public function surveyPost(Request $request) {
        $userId=1;
        $date=date('Y-m-d');
        $yes=0;
        $no=0;
        $data=$request->all();
        for($i=1; $i<=$request->index; $i++){
            if(isset($data['questions_id'.$i])){
            $survey = new Survey();
                $question=Questions::where('id',$data['questions_id'.$i])->get()->first();
                if($question->answer==$data['ans'.$i]) {
                   $result[$data['questions_id'.$i]]='Yes';
                   $survey->is_ans="yes";
                   $yes++;
                } else {
                   $result[$data['questions_id'.$i]]='No';
                   $survey->is_ans="No";
                   $no++;
                }
                $survey->user_id= $userId;
                $survey->question_type_id= $question->question_type_id;
                $survey->questions_id=$data['questions_id'.$i];
                $survey->ans=$data['ans'.$i];
                $survey->save();
            }     
        }

        if($res=Results::where('user_id',$userId)->where('question_type_id',$request->question_type_id)->first()) {
        } else {
            $res = new Results;
        }
        $res->user_id= $userId;
        $res->question_type_id= $request->question_type_id;
        $res->date= $date;
        $res->yes_ans=$yes;
        $res->no_ans=$no;
        $res->save();
        // return redirect('/MyExamResult')->with('success','Thaks For Join This Exam');
    }
            
}
