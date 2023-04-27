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
    public function editAuthor($id){
        return view('admin.author.edit-author', [
            'author'=>Author::find($id)
        ]);
    }

    public function saveAuthor(Request $request){
        Author::saveAuthor($request);
        return back()->with('message', 'Author Added successfully !!');
    }

    public function statusAuthor($id){
        Author::statusAuthor($id);
        return back()->with('message', 'Author Status Changed!!');
    }

    public function updateAuthor(){

    }
}
