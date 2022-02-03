<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionairAndQuestionTypeModel extends Model
{
    use HasFactory;

    protected $table = 'questionair_and_questype';
    protected $primaryKey = "id";  
    protected $fillable = [
        'questionair_id',
        'ques_type_id',
        'status',
    ];

    public function insertRecord($data){
        return QuestionairAndQuestionTypeModel::create($data);
    }

    public function getRecordWithCondition($condition){
        $query = QuestionairAndQuestionTypeModel::where($condition)->where('deleted_at',NULL)->where('status','<>',2)->get();
        // return sizeof($query);
        if(sizeof($query) != 0){
            return $query;
        }
    }

    public function getSingleRecordWithCondition($condition){ 
        return QuestionairAndQuestionTypeModel::where($condition)->where('deleted_at',NULL)->where('status','<>',2)->where($condition)->first();
        
    }
}
