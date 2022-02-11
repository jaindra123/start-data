<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionDependency extends Model
{
    use HasFactory;

    protected $table = "question_dependecy";    
    protected $primaryKey = "id";  
    protected $fillable = [
        'option_id',
        'language_id',
        'question_id',
        'question_type_id',
        'dependency',
        'answer_name',
        'dependecy_logic',
        'status',
    ];

    public function insertRecord($data)  {
        return QuestionDependency::create($data);
    }

    public function getRecordWithCondition($condition){
        
        return QuestionDependency::where('deleted_at', NULL)->where('status','<>',2)->where($condition)->get();
    }

    public function getSingleRecord($condition)
    {
        return QuestionDependency::where('deleted_at', NULL)->where('status','<>',2)->where($condition)->first();

    }
}
