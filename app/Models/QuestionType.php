<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionType extends Model {
    //use  HasFactory ;
    protected $table = "question_types";
	protected $fillable=['title','description','short_code','question_type','status'];
	public $timestamps = false;

    public function getAllRecord($select) {
        return QuestionType::select($select)->where('deleted_at',NULL)->get();
    }

    public function getSingleRecord($condition) {
        return QuestionType::where('deleted_at',NULL)->where($condition)->first();
    }

}
