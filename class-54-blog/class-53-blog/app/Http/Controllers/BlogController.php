<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;

class BlogController extends Controller
{
    //
    public function index(){
        return view('frontEnd.home.home',[
            'blogs' => Blog::with('category:id,category_name','author:id,author_name,image')->get()
        ]);
    }


    public function addBlog(){
        return view('admin.blog.add-blog',[
            'categories'=>Category::where('status', 1)->orderby('id','desc')->get(),
            'authors'=>Author::where('status', 1)->orderby('id','desc')->get()
            #latest ta orderby bodole lekha jai..
        ]);
    }

    public function saveBlog(Request $request){
        Blog::saveBlog($request);
        return back();
    }

    public function manageBlog(){
        $blogs = Blog::with('category:id,category_name','author:id,author_name')->get();
        return view('admin.blog.manage-blog',[
            'blogs'=>$blogs
        ]);
    }


}
