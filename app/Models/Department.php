<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table='departments';
    protected $primaryKey='deptno';
    public $timestamps=false;

    function student(){
        return $this->hasMany(Student::class,'deptno');
    }

    function teacher(){
        return $this->hasMany(Teacher::class,'deptno');
    }

    function course(){
        return $this->hasMany(Course::class,'deptno');
    }
}
