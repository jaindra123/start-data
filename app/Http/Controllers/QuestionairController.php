<?php
namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Language;
use App\Models\Questionair;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;
use App\Models\QuestionType;
use App\Models\Question;
use App\Models\Option;
use Illuminate\Support\Facades\DB;

class QuestionairController extends Controller
{
    public function add_questionairs(Request $request){
        $languageModel = new Language();
        $cutomerModel = new Customer();
        $data['language'] = $languageModel->getAllRecord();
        $data['customer'] = $cutomerModel->getAllCustomer();
        return view('questionairs.add', compact('data'));
    }
    public function store_questionairs(Request $request){
        $questionairModel  = new Questionair();
        $validator = validator()->make($request->post(),[
                'questionair'               => 'required|string',
                'year'                      => 'required|digits:4|numeric',
                'base_color'                => 'required',
                'button_backgound'          => 'required',
                'button_text'               => 'required',
                'language'                  => 'required',
                'last_page_timer'           => 'required|numeric',
                'idle_timer'                => 'required|numeric',
                'customer'                  => 'required',
                'headline'                  => 'required|string',
                'start_page_field'          => 'required|string',
                'last_page_field'           => 'required|string',
           
        ]);
        if ($validator->fails())
        {
            return response()->json(['success' => false,'errors'=>$validator->errors()]);
        }
        $checkQuestionairsExist = $questionairModel->getSingleRecord(['year'=>$request->year, 'name'=>$request->questionair,'deleted_at'=>NULL]);
        if($checkQuestionairsExist){
            return response()->json(['success' => false,'ques_errors'=>'Questionair Already Exist in '.$checkQuestionairsExist->year.' year']);
        }
        if ( $request->hasfile( 'first_page_picture' ) ) {
            $datetime     = date( 'Ymd_His' );
            $first_page_picture = $request->file( 'first_page_picture' );
            $filename     = $datetime . '-' .  $first_page_picture->getClientOriginalName() ;
            $savepath     = public_path( config( 'CONSTANT.QUESTIONAIR_PAGE_IMAGE' ) );
            $first_page_picture->move( $savepath, $filename );
            $first_page_picture = $filename;
        } else {
            $first_page_picture = '';
        }
        if ( $request->hasfile( 'last_page_picture' ) ) {
            $datetime     = date( 'Ymd_His' );
            $last_page_picture = $request->file( 'last_page_picture' );
            $filename1     = $datetime . '-' .  $last_page_picture->getClientOriginalName() ;
            $savepath     = public_path( config( 'CONSTANT.QUESTIONAIR_PAGE_IMAGE' ) );
            $last_page_picture->move( $savepath, $filename1 );
            $last_page_picture = $filename1;
        } else {
            $last_page_picture = '';
        }

        if(($request->published) != 0){
            $lang = $request->language;
        }else{
            $languages = $request->language;
            $lang = implode(",",$languages);
        }
        $data = [
            'name'                          =>      trim(ucfirst($request->questionair)),
            'year'                          =>      trim($request->year),
            'base_color'                    =>      trim($request->base_color),
            'button_background'             =>      trim($request->button_backgound),
            'button_text'                   =>      trim($request->button_text),
            'language_id'                   =>      $request->language,   
            'start_img'                     =>      $first_page_picture,
            'last_img'                      =>      $last_page_picture, 
            'is_publish'                    =>      ($request->published == 0) ? 0 : 1,
            'protected_link'                =>      isset($request->protected_link_with_password) ? 1 :0,
            'headline'                      =>      trim($request->headline),
            'start_text'                    =>      $request->start_page_field,
            'last_text'                     =>      $request->last_page_field,
            'display_progress_bar'          =>      isset($request->progress_bar) ? 1 : 0,
            'last_page_timer'               =>      trim($request->last_page_timer),
            'idle_timer'                    =>      trim($request->idle_timer),
            'select_customer'               =>      trim($request->customer),
            'status'                        =>      1,
        ];
        if(isset($request->protected_link_with_password)){
            $data['password_for_protected_link']  = randAlphaNumericStringGenerator(10);
        }
        $insertedRecord = $questionairModel->insertRecord($data);
        if(!empty($insertedRecord)){
            return response()->json(['success' => true,'message'=>'Questionairs created Sucessfully']);   
        }
    }

    #----------------------------All Questions -----------------------------#  
    public function AllQuestionairs(){   
        $languages = DB::table('languages')->get();
        $questions = Question::with('option')->with('questiontype')
                    ->join('languages as lang', 'questions.language', '=', 'lang.language_code')
                    ->get(['lang.language', 'questions.*']);
        return view('backend.questionair-tool',compact('questions','languages'));
    }
    #---------------------------  ------------------------------#   
    public function QuestionairSave(Request $request) {
        $this->validate($request,[
            'question'=>'required|unique:questions,question,NULL,id,question_type_id,'.$request->question_type_id,
            'question_type_id'=>'required',
        ]);
        $data = $request->all();
        $ques= Question::create([
            'language' => $request->language,
            'question' => $request->question,
            'std_qns' => $request->std_qns,
            'question_type_id' => $request->question_type_id,
        ]);
        
        if(count($request->answer) > 0) {
            foreach ($request->answer as $item=>$v) {
                $datad=array(
                  'questions_id'=>$ques->id,
                  'option'=>$request->answer[$item],
                  'display_text'=>$request->display_text[$item]
                );
                Option::insert($datad);
            }
        }
       return redirect()->back()->with('success','Data add successfully');           
    }
    #--------------------------- Search  -------------------#
    public function AutoCompleteSearch(Request $request){
        $query = $request->search;
        $questions = DB::table('questions')->where('question','LIKE','%'.$query.'%')->get();
        $output = '';
        if (count($questions)>0) {
            $output = '<table class="table"> <thead class="text-primary"><tr> <th> Question Name </th> <th> Question Type </th> </tr></thead>   <tbody>';
            foreach ($questions as $question) {
                $output .= '<tr> <td>'.$question->question.'</td> </tr>';
                $output .= '<tr> <td> '.$question->question_type_id.'</td> </tr>';
            }
            $output .= '</tbody></table>';
        }else {
            $output .= '<div class="list-group-item">'.'No Data Found'.'</div>';
        }
        return $output;
        return response()->json($questions);
    }
    #---------------------------  -------------------#
}
