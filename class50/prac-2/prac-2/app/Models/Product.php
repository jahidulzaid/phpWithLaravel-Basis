<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    use HasFactory;
    private static $product;
    public static function saveNewProduct($request){
        self::$product = new Product();
        self::$product->name = $request->name;
        self::$product->category_name = $request->category_name;
        self::$product->brand_name = $request->brand_name;
        self::$product->description = $request->description;
        if ($request->file('image')){
            if (self::$product->image){
                if (file_exists(self::$product->image)){
                    unlink(self::$product->image);
                    self::$product->image = self::saveImage($request);
                }
            }
            else
                self::$product->image = self::saveImage($request);

        }

        self::$product->save();
    }
    private static $image, $imageNewName, $directory, $imageUrl;
    public static function saveImage($request){
        self::$image =$request->file('image');
        self::$imageNewName ='product-'.rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'front-end-asset/img/products/';
        self::$imageUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imageUrl;

    }
    public static function deleteProduct($id){
        self::$product=Product::find($id);
        if (self::$product->image){
            if (file_exists(self::$product->image)){
                unlink(self::$product->image);
                self::$product->delete();
            }
            else{
                self::$product->delete();
            }

        }else{
            self::$product->delete();
        }

        self::$product->delete();
    }


    //for editing existing input
    public static function updateProduct($request){
        self::$product = Product::find($request->id);
        self::$product->name = $request->name;
        self::$product->category_name = $request->category_name;
        self::$product->brand_name = $request->brand_name;
        self::$product->description = $request->description;
        if ($request->file('image')){
            if (self::$product->image){
                if (file_exists(self::$product->image)){
                    unlink(self::$product->image);
                    self::$product->image = self::saveImage($request);
                }
            }
            else
                self::$product->image = self::saveImage($request);

        }

        self::$product->save();
    }
    public static function  statusProduct($id){
    self::$product=Product::find($id);
    if (self::$product->status==1){
        self::$product->status = 0;
    }else{
        self::$product->status =1;
    }
    self::$product->save();

    }
}
