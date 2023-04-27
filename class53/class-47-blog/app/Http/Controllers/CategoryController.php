<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function saveCategory(Request $request){
        Category::saveCategory($request);
        return back();
    }
    public static $categories,$category;
    public function manageCategory(){
        return view('admin.category.manage-category',
            [
                'categories'=>Category::all()
            ]);
    }
    public function editCategory($id){
        self::$category=Category::find($id);
        return view('admin.category.edit-category',
            [
                'category'=>self::$category

            ]);
    }

}
