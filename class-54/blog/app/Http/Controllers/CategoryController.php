<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private static $category;
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function manageCategory(){
//        $category = Category::all();
        return view('admin.category.manage-category', ['category'=>Category::all()]);
    }

    public function saveCategory(Request $request){
        Category::saveCategory($request);
        return back();
    }
    public function editCategory($id){
        return view('admin.category.edit-category', ['category'=>Category::find($id)]);
    }

    public function updateCategory(Request $request){
        Category::updateCategory($request);
        return back();
    }

    public function deleteCategory(Request $request){
        Category::deleteCategory($request->id);
        return back();
    }
}
