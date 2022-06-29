<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $primaryKey='course_id';
    public $timestamps=false;

    function department(){
        return $this->belongsTo(Department::class,'deptno');
    }

    function studentcourse(){
        return $this->hasMany(StudentCourse::class,'c_id','course_id');
    }

    function teachercourse(){
        return $this->hasMany(TeacherCourse::class,'c_id');
    }
}
