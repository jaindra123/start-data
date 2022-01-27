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
        'headline',
        'start_text',
        'last_text',
        'display_progress_bar',
        'last_page_timer',
        'idle_timer',
        'protected_link',
        'select_customer',
        'status',
    ];
}
