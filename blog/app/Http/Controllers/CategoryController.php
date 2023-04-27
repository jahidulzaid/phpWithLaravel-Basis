<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public static $category;
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function manageCategory(){
        return view('admin.category.manage-category',[
            'categories' => Category::all()
        ]);
    }
    public function saveCategory(Request $request){
        Category::saveCategory($request);
        return back()->with('message','Category Info added successfully... ');
    }
    public function deleteCategory(Request $request){
        Category::deleteCategory($request->id);
        return back()->with('message','Data deleted !! ');
    }
    public function editCategory($id){
        self::$category = Category::find($id);
        return view('admin.category.category-edit',[
            'category'=>self::$category
        ]);
    }
    public function updateCategory(Request $request){
//        return $request->file('image');
        Category::updateCategory($request);
        return back()->with('message','Info Updated .. ');
    }


}
