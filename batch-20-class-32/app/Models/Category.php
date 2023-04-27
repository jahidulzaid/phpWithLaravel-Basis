<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $categories =[];
    public static function getAllCategory(){
        self::$categories=
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
}

