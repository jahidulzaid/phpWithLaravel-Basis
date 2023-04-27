<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function addAuthor(){
        return view('admin.author.add-author');
    }
    public function saveAuthor(Request $request){
        Author::saveAuthor($request);
        return back()->with('message','Data saved !! ');
    }
    public function manageAuthor(){
        return view('admin.author.manage-author',[
            'authors'=>Author::all()
        ]);
    }
    public function deleteAuthor(Request $request){
        Author::deleteAuthor($request->id);
        return back()->with('message','Data deleted !! ');
    }
    public function statusAuthor($id){
        Author::statusAuthor($id);
        return back();
    }
}
