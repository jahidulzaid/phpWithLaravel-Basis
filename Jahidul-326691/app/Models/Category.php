<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static $categories;
    public static function categoryList($data){
        self::$categories = new Category();
        self::$categories -> cat_id = $data -> cat_id;
        self::$categories -> cat_name = $data -> cat_name;
        self::$categories -> save();
    }
}
