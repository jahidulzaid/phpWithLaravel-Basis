<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(){
        return view('admin.user.add-user');
    }
    public function saveUser(Request $request){
        User::saveUser($request);
        return back();
    }
    public function manageUser(){
        return view('admin.user.manage-user',[
            'users'=>User::all()
        ]);
    }
    public function editUser($id){
        return view('admin.user.edit-user',[
            'user'=>User::find($id)
        ]);
    }
    public function updateUser(Request $request){
        User::saveUser($request);
        return back();
    }
}
