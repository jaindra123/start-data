<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionairController extends Controller
{
    //
    public function add_questionairs(Request $request){
        
        return view('questionairs.add');
    }

    public function store_questionairs(Request $request){

        
    }
}
