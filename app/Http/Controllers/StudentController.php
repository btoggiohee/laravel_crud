<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    //
    public function getIndex(){
        $query=Student::query();
        $students=$query->orderBy('id','desc')->paginate(10);
        return view('student.list')->with('students',$students);
    }
    public function new_index(){
        return view('student.new_index');
    }
    public function new_finish(request $request){
        $request->validate([
            'name'=>['required','string','max:255'],
            'email'=>['required','string','email','max:255'],
            'tel'=>['required'],
        ]);
        $student=Student::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'tel'=>$request->tel,
        ]);
        return redirect()->route('student.getIndex');
    }

    public function edit_index($id){
        $student=Student::FindOrFail($id);
        return view('student.edit_index')->with('student',$student);
    }
    public function edit_finish(Request $request, $id){
        $request->validate([
            'name'=>['required','string','max:255'],
            'email'=>['required','string','email','max:255'],
            'tel'=>['required'],
        ]);
        $student=Student::FindOrFail($id);
        $student->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'tel'=>$request->tel,
        ]);
        return redirect()->route('student.getIndex');
    }
    public function us_delete($id){
        $student=Student::FindOrFail($id);
        $student->delete();
        return redirect()->route('student.getIndex');
    }
}
