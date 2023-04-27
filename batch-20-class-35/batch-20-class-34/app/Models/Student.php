<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    private static $student;
    public static function saveStudent($request){
        self::$student = new Student();
        self::$student->seid = $request->seid;
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->phone = $request->phone;
        self::$student->address = $request->address;
        self::$student->course_name = $request->course_name;
        self::$student->department = $request->department;
        self::$student->image = $request->image;

        self::$student->save();
    }

    public static function deleteStudent($id){
        self::$student=Student::find($id);
        self::$student->delete();

    }
}
