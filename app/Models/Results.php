<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Results extends Model
{
    protected $table = "results";   
	protected $fillable=['user_id','quizes_id','yes_ans','no_ans','date','status','result_json'];
    public $timestamps = false;

    public function user()
    {
    	return $this->belongsTo(User::class);	
    }
    public function QuestionType()
    {
    	return $this->belongsTo(QuestionType::class);
    }
}
