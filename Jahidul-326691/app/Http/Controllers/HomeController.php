<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        return view('home',[
            'getProduct' => Product::all(),
            'getCategory' => Category::all()
        ]);
    }
    public function productEntry(){
        return view('productEntry',[
            'getCategory' => Category::all()
        ]);
    }
    public function proList(){
        return view('productList',[
            'getProduct' => Product::all(),
            'getCategory' => Category::all()
        ]);
    }


    public function productAdd(Request $data){
        Product::productList($data);
        return back();
    }

    public function category(){
        return view('category',[
            'getCategory' => Category::all()
        ]);
    }

    public function catAdd(Request $data){
        Category::categoryList($data);
        return back();
    }

}
