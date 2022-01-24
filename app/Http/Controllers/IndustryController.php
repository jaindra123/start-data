<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Industry;
use Illuminate\Support\Facades\DB;
use Session;
use View;

class IndustryController extends Controller
{
#---------------------------- Display All Industry-----------------------------#     
    public function index()
    {
        $industries = Industry::orderBy('id','ASC')->paginate(5);
        return view('industry/industry-list', compact('industries'));
    }
#--------------------------- Insert/Edit Industry ------------------------------#   
    public function store(Request $request) {
        $industry= Industry::updateOrCreate(
            ['id' => $request->id],
            ['indury' => $request->industry_name,]
        );
       return response()->json(['success' => true,'message'=>'Industry Created successfully']);
    }
#--------------------------- Single Industry Show --------------------------#
    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $industry  = Industry::where($where)->first();
        //print_r($industry);
        //exit;
        return response()->json($industry);
    }
#--------------------------- Delete --------------------------------------#
    public function destroy(Request $request)
    {
        $industry = Industry::where('id',$request->id)->delete();
        return response()->json(['success' => true]);
    }


}
