<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $products;
    public static function productList($data){
        self::$products = new Product();

        self::$products->id = $data->id;
        self::$products->name = $data->name;
        self::$products->cat_id = $data->cat_id;
        self::$products->price = $data->price;
        self::$products->image = $data->image;
        self::$products->description = $data->description;
        self::$products->save();



    }
}
