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

}
