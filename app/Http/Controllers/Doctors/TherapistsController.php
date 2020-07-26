<?php

namespace App\Http\Controllers\Doctors;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Therapist;
use DB;
class TherapistsController extends Controller
{
    // Therapists list view function
    public function index(){
        $therapists = Therapist::all();
        return view ('therapist.index',compact('therapists'));
    } 

    public function get_all(Request $request){
        if($request->ajax())
        {
            $therapists = Therapist::all();
            return Response()->json($therapists);
        }
    } 

    //Search function
    public function search(Request $request,$search)
    {

        if($request->ajax())
        {
            $therapists=DB::table('therapists')->where('first_name','LIKE','%'.$search.'%')->get();
            return Response()->json($therapists);
      
        }
    }

    public function show(Request $request,$id){
        
        if($request->ajax())
        {
            $therapist=DB::table('therapists')->where('id','LIKE', $id)->get();
            return Response()->json($therapist);
      
        }
    }
}
