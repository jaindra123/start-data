<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionairOtherLanguage extends Model
{
    use HasFactory;
    protected $table = "questionair_other_language";    
    protected $primaryKey = "id";  
    protected $fillable = [
        "questiaonair_id",
        "language_id",
        "start_text",
        "last_text",
        "headline",
        "status"
    ];

    public function inserRecord($data){   
        return QuestionairOtherLanguage::create($data);
    }
}
