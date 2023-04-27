<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    private static $students,$student;
    public function index(Request $request){

//        to check if the post works

//        return $request;
//        return $request->file('image');

        Student::saveStudent($request);
        return back()->with('message','Info saved!!');

    }
    public function studentList(){
        self::$students = DB::table('students')
            ->join('departments','students.department','departments.id')
            ->select('students.*','departments.department_name')
            ->get();
        return view('student-list',[
            'students'=>self::$students
        ]);
    }

    public function studentDelete(Request $request){
        Student::deleteStudent($request->id);
        return back()->with('message', 'Info deleted');
    }

    public function studentEdit($id){
        self::$student=Student::find($id);

         return view('student-edit', [
             'student'=>self::$student,
             'departments'=>Department::all()
         ]);

    }

    public function studentUpdate(Request $request){
        Student::studentUpdate($request);
        return back()->with('message', 'info updated !!');
    }
}
