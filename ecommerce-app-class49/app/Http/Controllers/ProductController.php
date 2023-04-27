<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        return view('admin.product.add-product');
    }
    public function manageProduct(){
        return view('admin.product.manage-product');
    }

    public function saveProduct(Request $request){
        Product::saveProduct($request);
        return back();
    }
}
