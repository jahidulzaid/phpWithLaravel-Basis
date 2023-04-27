<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }

    public function addBlog(){
        return view('admin.blog.add-blog', [
            'category'=> Category::where('status', 1)->get()
        ]);
    }
}
