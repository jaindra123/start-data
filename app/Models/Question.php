<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model 
{
    use HasFactory;

    protected $fillable=['page_id','questionair_type_id','question','language_id','lang_code','mandatory','max_ans_size','number_unit','open_text_field_ans','personal_data_question_required','std_qns','dependent_answer','status','first_data_or_not','options','display_texts'];

    public function option() {
        return $this->hasMany(Option::class,'questions_id','id');
    }
    
    public function questiontype(){
        return $this->belongsTo(QuestionType::class, 'question_type_id');
    }

    public function questionairAndQuestionTypeModel(){
        return $this->hasMany(QuestionairAndQuestionTypeModel::class, 'id', 'questionair_type_id');
    }
    

    public function getRecordWithCondition($select,$condition){
        $query = Question::join('questionair_and_questype', 'questionair_and_questype.id' , '=', 'questions.questionair_type_id' )
            ->select($select)
            ->where('questionair_and_questype.deleted_at',NULL)
            ->where('questions.deleted_at', NULL)
            ->where($condition)
            ->orderBy('questions.created_at','DESC')->get();
        return $query;
    }

    public function insertRecord($data){
        return Question::create($data);
    }

    public function getSingleRecord($condition){
        return Question::where('deleted_at',NULL)->where('status','<>',2)->where($condition)->first();
    }
}