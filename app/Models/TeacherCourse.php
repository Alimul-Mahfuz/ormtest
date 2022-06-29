<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherCourse extends Model
{
    use HasFactory;
    protected $table='courseteachers';
    protected $primaryKey='ct_id';

    function teacher(){
        return $this->belongsTo(TeacherCourse::class,'t_id');
    }

    function course(){
        return $this->belongsTo(Course::class,'c_id');
    }
}
