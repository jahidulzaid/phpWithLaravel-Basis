<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private static $blog, $str;
    public static function saveBlog($request){
        self::$blog=new Blog();
        self::$blog->category_id = $request->category_id;
        self::$blog->author_id = $request->author_id;
        self::$blog->blog_title = $request->blog_title;
        self::$blog->slug = self::makeSlug($request);
        self::$blog->description= $request->description;
        self::$blog->date= $request->date;
        self::$blog->image= self::saveImage($request);
        self::$blog->save();
    }
    private static $category, $image, $imageNewName, $directory, $imageUrl;
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = 'category-'.rand().'.'.self::$image->Extension();
        self::$directory = 'admin-asset/upload-image/category/';
        self::$imageUrl = self::$directory . self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imageUrl;
    }
    private static function makeSlug($request){
        if ($request->slug){
           self::$str =$request->slug;
           return preg_replace('/\s+/u','-',trim(self::$str));
        }else{
            self::$str =$request->blog_title;
            return preg_replace('/\s+/u','-',trim(self::$str));
        }


    }
    //for eloquent data relationship

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function author(){
        return $this->belongsTo(Author::class);
    }



}
