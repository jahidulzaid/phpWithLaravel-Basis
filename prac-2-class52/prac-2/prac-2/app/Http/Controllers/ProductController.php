<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;
use function Symfony\Component\String\s;

class ProductController extends Controller
{
    public static $products;
    public function addProductView(){
        self::$products =  Product::all();
        return view('admin.product.add-product',[
            'products'=>self::$products

        ]);
    }
    public static $product;
    public function addProduct(Request $request){
        Product::saveNewProduct($request);
        return back()->with('message', 'Product Added!!');
    }
    public function updateProductView($id){
        self::$products=Product::all();
        self::$product = Product::find($id);
        return view('admin.product.update-product',[
            'products'=>self::$products
        ],
        [
            'product'=>self::$product
        ]);


    }
    public function updateProduct(Request $request){
        Product::updateProduct($request);
        return back()->with('message', 'Product Updated!!');
    }

    public function deleteProduct(Request $request){
        Product:: deleteProduct($request);
        return back()->with('message', 'Product deleted successfully!!');

    }

    //manage
    public function manageProductView(){
        self::$products =  Product::all();
        return view('admin.product.manage-product',[
            'products'=>Product::all()

        ]);
    }
    public function statusProduct($id){
        Product::statusProduct($id);
        return back();
    }


}
