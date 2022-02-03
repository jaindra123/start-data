<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyAnswer extends Model
{
    use HasFactory;
    protected $table = "survey_ans";
    protected $fillable = ['customer_id','questionair_id','language_id','page_id','question_id','other','answer','other_answer'];
}
