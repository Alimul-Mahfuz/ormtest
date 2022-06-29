<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    use HasFactory;
    protected $table = 'coursestudents';
    protected $primaryKey='cs_id';
    public  $timestamps=false;

    function student(){
        return $this->belongsTo(Student::class,'s_id');
    }

    function  course(){
        return $this->belongsTo(Course::class,'c_id');
    }
}
