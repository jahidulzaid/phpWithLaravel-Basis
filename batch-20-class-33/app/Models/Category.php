<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $categories =[], $category;
    public static function getAllCategory(){
        return self::$categories=
            [
                [
                    'id'=>1,
                    'category_name'=>'mobile'
                ],
                [
                    'id'=>2,
                    'category_name'=>'laptop'
                ],
                [
                    'id'=>3,
                    'category_name'=>'tv'
                ]

            ];
    }

    public static function getCategoryById($catId){
        self::$categories = self::getAllCategory();
        foreach (self::$categories as self::$category) {
            if (self::$category['id']==$catId){
                return self::$category['category_name'];
            }
        }
    }
}

