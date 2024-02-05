<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function getIndex(){
        $query=Student::query();
        $students=$query->orderBy('id','desc')->pagination(10);
        return view('student.list')->with('student',$students);
    }
}
