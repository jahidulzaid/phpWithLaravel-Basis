<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    private static $products, $product;
    public function index(){

        self::$products = Product::getAllProduct();
        return view('home', ['products' =>self::$products]);


    }
    public function product(){
        return view('product');
    }

    public function details($id){
        self::$product = Product::getProductById($id);

        return self::$product;

        return view('details');
    }
}
