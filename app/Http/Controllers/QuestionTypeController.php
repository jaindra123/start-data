<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\QuestionType;
use Illuminate\Support\Facades\DB;
use Session;
use View;

class QuestionTypeController extends Controller
{
#---------------------------- Display All Question Type-----------------------------#     
    public function index()
    {
        $question_types = QuestionType::orderBy('id','ASC')->get();
        return view('question-type/question-types', compact('question_types'));
    }
#--------------------------- Insert/Edit Question Type ------------------------------#   
    public function store(Request $request) {
        $question_types= QuestionType::updateOrCreate(
            ['id' => $request->id],
            ['title' => $request->question_type,]
        );
       return response()->json(['success' => true,'message'=>'Question Type Created successfully']);
    }
#--------------------------- Single Question Type Type Show --------------------------#
    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $question_types  = QuestionType::where($where)->first();
        return response()->json($question_types);
    }
#--------------------------- Delete --------------------------------------#
    public function destroy(Request $request)
    {
        $industry = QuestionType::where('id',$request->id)->delete();
        return response()->json(['success' => true]);
    }


}
