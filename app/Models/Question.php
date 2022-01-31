<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model 
{
    use HasFactory;
    protected $fillable=['question_type_id','question','lang_code','std_qns','dependent_answer','display_text','status','options','display_texts'];

    public function option() {
        return $this->hasMany(Option::class,'questions_id','id');
    }
    public function questiontype(){
        return $this->belongsTo(QuestionType::class, 'question_type_id');
    }  

}