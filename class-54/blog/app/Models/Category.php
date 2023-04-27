<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    private static $cat, $image, $imgNewName, $dir, $imgUrl, $category;
    use HasFactory;

    public static function saveCategory($request){
        self::$cat = new Category();
        self::$cat->category_name = $request->category_name;
        self::$cat->image = self::saveImage($request);
        self::$cat->save();
    }

    public static function updateCategory($request){
        self::$cat = Category::find($request->id);
        self::$cat->category_name = $request->category_name;
        if ($request->file('image')){
            if(self::$cat->image){
                if (file_exists(self::$cat->image)){
                    unlink(self::$cat->image);
                    self::$cat->image = self::saveImage($request);
                }
            }
            else{
                self::$cat->image = self::saveImage($request);
            }
        }
        self::$cat->save();
    }

    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imgNewName = 'category-'.rand().'.'.self::$image->Extension();
        self::$dir = 'admin-asset/upload-image/category/';
        self::$imgUrl = self::$dir.self::$imgNewName;
        self::$image->move(self::$dir, self::$imgNewName);
        return self::$imgUrl;
    }
    public static function deleteCategory($id){
        self::$category = Category::find($id);
        self::$category->delete();
    }

}
