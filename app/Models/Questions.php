<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model {
    protected $fillable=['question_type_id','question','answer','status','options','note'];

    public function optionsdata(){
    	return $this->hasMany(Options::class,'questions_id');   //one to many
    }
    public function questiontypes(){
    	return $this->belongsTo(QuestionType::class);         //One To Many (Inverse) / Belongs To
    }
}