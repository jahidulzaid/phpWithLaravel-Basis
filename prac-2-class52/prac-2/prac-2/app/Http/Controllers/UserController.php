<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use function Symfony\Component\String\b;

class UserController extends Controller
{
    public function addUser(){
        return view('admin.user.add-user');
    }
    public function saveNewUser(Request $request){
        User::updateUser($request);
        return back();
    }
    public function manageUser(){
        return view('admin.user.manage-user',[
            'users'=>User::all()
        ]);
    }
    public function editUser($id){
        return view('admin.user.update-user',[
            'user'=>User::find($id)
        ]);
    }
    public function updateUser(Request $request){
        User::updateUser($request);
        return back();
    }
    public function deleteUser(Request $request){
        User::deleteUser($request);
        return back()->with('message', 'User deleted successfully!!');

    }
}
