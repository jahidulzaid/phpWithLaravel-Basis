<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return view('department');
    }
    public function saveDepartment(Request $request){
        Department::saveDepartment($request);
        return back();
    }
}
