<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey='student_id';
    public $timestamps=false;

    function department(){
        return $this->belongsTo(Department::class,'deptno');
    }

    function studentcourse(){
        return $this->hasMany(StudentCourse::class,'s_id');
    }
}
