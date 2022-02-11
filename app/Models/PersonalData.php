<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalData extends Model
{
    use HasFactory;


    protected $table = "personal_data";    
    protected $primaryKey = "id";  
    protected $fillable = [
        'questionair_id',
        'questionTitle',
        'answer',
        'status',
    ];

    public function insertRecord($data)  {
        return PersonalData::create($data);
    }
}
