<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Options extends Model{
	protected $fillable=['questions_id','option','status'];

	/*public function questions(){
		return $this->belongsTo(Questions::class);
	}*/
}
