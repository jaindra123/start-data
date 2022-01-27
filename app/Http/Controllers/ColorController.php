<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\SystemLanguage;
use Illuminate\Support\Facades\Auth;

class ColorController extends Controller
{
    //Color code add n update
    public function addColor(Request $request){
        if(Auth::check()){
            $id = Auth::user()->id;
            $data = Color::updateOrCreate([
                'customer_id'   => $id,
            ],[
                'color1'        => $request->color1,
                'color2'        => $request->color2,
                'color3'        => $request->color3,
                'color4'        => $request->color4,
                'color5'        => $request->color5,
                'language_id'   => $request->language,
                'customer_id'   => $id,
            ]);
            return back();
        }
        else{
            return redirect('login');
        } 
    }

    public function addLanguage(Request $request){
        if(Auth::check()){
            $id = Auth::user()->id;
            $data = SystemLanguage::updateOrCreate([
                'customer_id'   => $id,
            ],[
                'language'      => $request->value,
                'customer_id'   => $id,
            ]);
        }
        else{
            return redirect('login');
        }
    }
}
