<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model 
{
    use HasFactory;
    protected $fillable=['question_type_id','question','answer','status','options','note'];

    public function option() {
        return $this->hasMany(Option::class,'questions_id','id');
    }
    public function questiontype(){
        return $this->belongsTo(QuestionType::class, 'question_type_id');
    }
}