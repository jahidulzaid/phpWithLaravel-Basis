<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private static $author, $image, $imageNewName, $imageUrl, $directory;
    use HasFactory;
    public static function saveAuthor($request){
        self::$author = new Author();
        self::$author->name = $request->name;
        self::$author->image = self::saveImage($request);
        self::$author->save();
    }

    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = 'author-'.rand().'.'.self::$image->Extension();
        self::$directory = 'admin-asset/upload-image/author/';
        self::$imageUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imageUrl;
    }
    public static function statusAuthor($id){
        self::$author = Author::find($id);
//        return self::$author;
        if (self::$author->status == 1)
        {
            self::$author->status = 0;
        }
        else{
            self::$author->status = 1;
        }
        self::$author->save();
    }
}
