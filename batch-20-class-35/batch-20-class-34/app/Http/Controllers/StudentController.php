<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private static $students;
    public function index(Request $request){

//        to check if the post works

//        return $request;
//        return $request->file('image');

        Student::saveStudent($request);
        return back()->with('message','Info saved!!');

    }
    public function studentList(){
        self::$students = Student::all();
        return view('student-list',[
            'students'=>self::$students
        ]);
    }

    public function studentDelete(Request $request){
        Student::deleteStudent($request->id);
        return back()->with('message', 'Info deleted');
    }
}
