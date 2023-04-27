<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function League\Flysystem\move;

class Category extends Model
{
    use HasFactory;
    private static $category, $image, $imageNewName, $directory, $imageUrl;
    public static function saveCategory($request){
        self::$category = new Category();
        self::$category->category_name = $request->category_name;
        self::$category->image = self::saveImage($request);
        self::$category->save();
    }

    public static function deleteCategory($id){
        self::$category = Category::find($id);
        self::$category->delete();
        if (self::$category->image) {
            if (file_exists(self::$category->image)) {
                unlink(self::$category->image);
            }
        }
    }
    public static function updateCategory($request){
        self::$category = Category::find($request->id);
        self::$category->category_name = $request->category_name;
        self::$category->image = $request->image;
        if ($request->file('image')){
            if (self::$category->image) {
                if (file_exists(self::$category->image)) {
                    unlink(self::$category->image);
                    self::$category->image = self::saveImage($request);
                }
            }else{
                self::$category->image = self::saveImage($request);
            }
        }
        self::$category->status = $request->status;
        self::$category->save();
    }
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = 'category-'.rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'admin-asset/upload-image/category/';
        self::$imageUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imageUrl;
    }

}
