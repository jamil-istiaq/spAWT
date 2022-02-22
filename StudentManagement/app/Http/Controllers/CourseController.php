<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function list(){
        $courses = Course::all();
        return view('courses.list')->with('courses', $courses);

    }
}
