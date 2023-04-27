<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request){

//        to check if the post works

//        return $request;
//        return $request->file('image');

        Student::saveStudent($request);
        return back()->with('message','Info saved!!');

    }
}
