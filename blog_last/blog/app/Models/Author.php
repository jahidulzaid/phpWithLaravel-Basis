<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Author extends Model
{
    use HasFactory;
    private static $author,$image, $imageNewName, $directory, $imgUrl;
    public static function saveAuthor($request){
        self::$author = new Author();
        self::$author->author_name = $request->author_name;
        self::$author->image = self::saveImage($request);
        self::$author->save();
    }
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = 'author-'.rand().'.'.self::$image->Extension();
        self::$directory = 'admin-asset/upload-image/author/';
        self::$imgUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imgUrl;
    }
    public static function deleteAuthor($id){
        self::$author = Author::find($id);
        self::$author->delete();
        if (self::$author->image) {
            if (file_exists(self::$author->image)) {
                unlink(self::$author->image);
            }
        }
    }
    public static function statusAuthor($id){
        self::$author = Author::find($id);
        if (self::$author->status == 1){
            self::$author->status = 0;
        }else{
            self::$author->status = 1;
        }
        self::$author->save();
    }
}
