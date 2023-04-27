<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Category;
use function League\Flysystem\get;

class BlogController extends Controller
{
    public function index(){
        return view('frontEnd.home.home',[
            'blogs'=> Blog::with('category:id,category_name','author:id,author_name,image')->get()
        ]);
    }
    public function addBlog(){
        return view('admin.blog.add-blog',[
            'categories' => Category::where('status',1)->orderby('id','desc')->take(2)->skip(1)->get(),
            'authors' => Author::where('status',1)->orderby('id','desc')->get()
        ]);
    }
    public function saveBlog(Request $request){
        Blog::saveBlog($request);
        return back();
    }
    public function manageBlog(){
        $blogs = Blog::with('category:id,category_name','author:id,author_name,image')->get();
//        return $blogs;
        return view('admin.blog.manage-blog',[
            'blogs' => $blogs
        ]);
    }
    public function editBlog($id){
        return view('admin.user.edit-user',[
            'blogs'=> Blog::find($id)
        ]);
    }
    public function deleteBlog(Request $request){
        Blog::deleteBlog($request->id);
        return back()->with('message','Data deleted !! ');
    }
    public function blogDetails($slug){
        $blogDetails = Blog::where('slug',$slug)->first();
        $blogCategory = $blogDetails->category_id;
        $relatedBlogs = Blog::where('category_id',$blogCategory)->get();
//        return $relatedBlogs;
        return view('frontEnd.blog.blog-details',[
            'blogs' => $blogDetails,
            'relatedBlogs' => $relatedBlogs,
            'comments' => Comment::where('blog_id',$blogDetails->id)->get()
        ]);
    }
}
