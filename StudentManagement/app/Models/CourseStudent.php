<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Student;

class CourseStudent extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="course_students";
    
    public function course(){
        return $this->belongsTo(Course::class,'crs_id');
    }

    public function student(){
        return $this->belongsTo(Student::class,'st_id');
    }
}
