<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $primaryKey='teacher_id';
    public $timestamps=false;

    function department(){
        return $this->belongsTo(Department::class,'deptno');
    }

    function courseTeacher(){
        return $this->hasMany(TeacherCourse::class,'t_id');
    }
}
