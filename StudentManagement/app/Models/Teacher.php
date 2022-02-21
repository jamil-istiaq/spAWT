<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseTeacher;
use App\Models\Department;
class Teacher extends Model
{
    use HasFactory;
    public $timestamps = false;

    // public function taught_course(){
    //     return $this->hasMany(CourseTeacher::class,'t_id');
    // }
    // public function department(){
    //     return $this->belongsTo(Department::class,'dept_id'); // maps student tables d_id with departments id
    //     //return $this->belongsTo(Department::class,'d_id','another column');
    // }
    public function courses(){
        return $this->hasMany(CourseTeacher::class,'t_id');
    }

}
