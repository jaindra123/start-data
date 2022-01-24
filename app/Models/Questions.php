<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model {
    protected $fillable=['question_type_id','question','answer','status','options','note'];

    public function optionsdata()
    {
    	return $this->hasMany(Options::class)->inRandomOrder();
    }
    public function questiontypes()
    {
    	return $this->belongsTo(QuestionType::class);
    }
}




/*class Questions extends Model {
    protected $fillable=['question_type_id','question','answer','status','options','note'];

    public function optionsdata() {
        return $this->hasMany(Options::class,'id','questions_id');
    }
    public function questiontypes(){
        return $this->belongsTo(QuestionType::class);
    }
}*/