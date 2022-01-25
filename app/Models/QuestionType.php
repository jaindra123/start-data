<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionType extends Model {
    //use  HasFactory ;
    protected $table = "question_types";
	protected $fillable=['title','description','short_code','question_type','status'];
	public $timestamps = false;

}
