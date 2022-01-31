<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionair extends Model
{
    use HasFactory;


    protected $table = "questionairs";    
    protected $primaryKey = "id";  
    protected $fillable = [
        'name',
        'year',
        'base_color',
        'button_background',
        'button_text',
        'language_id', 
        'start_img',
        'last_img', 
        'is_publish',
        'password_for_protected_link', 
        'headline',
        'start_text',
        'last_text',
        'display_progress_bar',
        'last_page_timer',
        'idle_timer',
        'protected_link',
        'url_link',
        'select_customer',
        'status',
    ];

    public function insertRecord($data)  {
        return Questionair::create($data);
    }

    public function getSingleRecord($condition){
        $query = Questionair::where($condition)->first();
        if($query){
            return $query;
        }return false;
    }

    public function getAllRecordWithCondition($condition){
        return Questionair::where($condition)->where('deleted_at',NULL)->orderBy('created_at','DESC')->paginate(3,['*'],'draft_paginate');
    }

    public function getCountWithCondition($condition){
        return Questionair::where($condition)->where('deleted_at',NULL)->count();
    }

    public function getQuestionairWithOtherLanguage($condition) {
        $query = Questionair::leftJoin('questionair_other_language','questionairs.id','=','questionair_other_language.questiaonair_id')
            ->select('questionairs.*','questionair_other_language.id as quesId','questionair_other_language.language_id as quesLang','questionair_other_language.start_text as quesStartText','questionair_other_language.last_text as quesLastText', 'questionair_other_language.headline as quesHeadline','questionair_other_language.status as quesStatus')
            ->where('questionairs.deleted_at',NULL)
            ->where('questionair_other_language.deleted_at',NULL)
            ->where($condition)->get();
        return $query;
    }

    public function getActiveAndInactiveRecordsCount($condition){
        return Questionair::where($condition)->where('deleted_at',NULL)->where('url_link','!=',NULL)->count();

    }

    public function getActiveInactiveRecord($condition){
        return Questionair::where($condition)->where('deleted_at',NULL)->where('url_link','!=',NULL)->orderBy('created_at','DESC')->paginate(3);

    }
}
