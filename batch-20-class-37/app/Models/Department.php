<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    private static $department;
    public static function saveDepartment($request ){
         self::$department= new Department();
         self::$department->department_name = $request->department_name;
         self::$department->department_code = $request->department_code;
         self::$department->save();
    }
}
