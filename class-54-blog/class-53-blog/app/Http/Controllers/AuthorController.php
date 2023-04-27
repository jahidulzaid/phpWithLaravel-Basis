<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function addAuthor(){
        return view('admin.author.add-author');
    }
    public function manageAuthor(){
        return view('admin.author.manage-author',[
            'authors'=>Author::all()
        ]);
    }
    public function saveAuthor(Request $request){
        Author::saveAuthor($request);
        return back();
    }
    public function editAuthor($id){
        return view('admin.author.edit-author',[
            'author'=> Author::find($id)
        ]);

    }

    public function statusAuthor($id){
        Author::statusAuthor($id);
        return back();
    }
}
