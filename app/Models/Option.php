<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
	use HasFactory;
	protected $fillable=['questions_id','option','display_text','std_opt','is_dependent','axis','status'];

	public function question(){
		return $this->belongsTo(Question::class);
	}

	
    public function insertRecord($data){
        return Option::create($data);
    }

	public function getRecordWithCondition($condition){
		return Option::where($condition)->get();
	}
}
