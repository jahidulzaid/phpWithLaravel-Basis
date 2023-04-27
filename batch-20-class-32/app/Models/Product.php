<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $products=[], $product;
    public static function getAllProduct(){
        return self::$products=
            [
                [
                    'id'=>1,
                    'category_id'=>1,
                    'name'=>'Asus',
                    'price'=>'51000 BDT',
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ALorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto ne architecto ne',
                    'image'=>'1.jpg'
                ],
                [
                    'id'=>2,
                    'category_id'=>2,
                    'name'=>'Dell',
                    'price'=>'51000 BDT',
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ALorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto ne architecto ne',
                    'image'=>'2.jpg'
                ],
                [
                    'id'=>3,
                    'category_id'=>3,
                    'name'=>'Samsung',
                    'price'=>'51000 BDT',
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ALorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto ne architecto ne',
                    'image'=>'3.jpg'
                ],
                [
                    'id'=>4,
                    'category_id'=>2,
                    'name'=>'Iphone',
                    'price'=>'51000 BDT',
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ALorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto ne architecto ne',
                    'image'=>'2.jpg'
                ],
                [
                    'id'=>5,
                    'category_id'=>3,
                    'name'=>'ViewSonic',
                    'price'=>'51000 BDT',
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ALorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto ne architecto ne',
                    'image'=>'1.jpg'
                ],
                [
                    'id'=>6,
                    'category_id'=>2,
                    'name'=>'Asus',
                    'price'=>'51000 BDT',
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ALorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto ne architecto ne',
                    'image'=>'3.jpg'
                ],

            ];
    }

    public static function getProductById($id){
        self::$product=self::getAllProduct();
        foreach (self::$product as $item) {
            if ($item['id']==$id){
                return $item;
            }
        }
    }
}
