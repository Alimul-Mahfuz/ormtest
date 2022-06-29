<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\StudentCourse;
use App\Models\TeacherCourse;
use Illuminate\Http\Request;
use App\Models\Department;

class DataController extends Controller
{
    //
    function SaveDept(){
//        $std=new Student();
        $data=Department::find(1);


        return view('welcome')->with('data',$data);

    }
}
