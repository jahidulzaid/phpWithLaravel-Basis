<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){
        return view('frontEnd.home.home');
    }


    public function addBlog(){
        return view('admin.blog.add-blog',[
            'categories'=>Category::where('status', 1)->orderby('id','desc')->take(2)->skip(1)->get(),
            'authors'=>Author::where('status', 1)->orderby('id','desc')->get()
            #latest ta orderby bodole lekha jai..
        ]);
    }
    public function manageBlog(){
        return view('admin.blog.manage-blog');
    }
    public function saveBlog(Request $request){
        return view('admin.blog.edit-blog',[

        ]);
    }

}
