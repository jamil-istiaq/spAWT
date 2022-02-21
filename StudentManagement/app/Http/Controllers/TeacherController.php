<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function list(){
        $t = Teacher::all();
        return view('teacher.list')->with('t', $t);

    }

    public function details(Request $req){
        $t = Teacher::where('id',$req->id)
        ->select('id','name','designation')
        ->first();

        return view('teacher.details')->with('t',$t);
    }
}
