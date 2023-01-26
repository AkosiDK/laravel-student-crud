<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //retrieve all student
    public function display(){
        return view ('index')->with('student', Student::orderByDesc('created_at')->get());
    }

    //create
    public function create(Request $request){
        $student = new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->age=$request->age;
        $student->save();

        return redirect()->route('index')->with('success', 'New student added!');
    }
}
