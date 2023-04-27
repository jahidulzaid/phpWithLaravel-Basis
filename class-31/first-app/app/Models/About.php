<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;


    public $infos = [];
    public function getInfo()
    {
        return $this->infos = [
            [
                'id'=>1,
                'name'=>'Alif',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi cum, dignissimos dolorem ea id ipsa ipsum magnam nam nihil numquam perspiciatis quae quisquam rerum tempore tenetur totam voluptate voluptates. Alias aliquam deserunt dolorem doloremque earum eum excepturi facilis, molestiae nobis, nostrum odit possimus quod ratione recusandae saepe veniam voluptatibus!',
            ],
            [
                'id'=>2,
                'name'=>'Alif',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi cum, dignissimos dolorem ea id ipsa ipsum magnam nam nihil numquam perspiciatis quae quisquam rerum tempore tenetur totam voluptate voluptates. Alias aliquam deserunt dolorem doloremque earum eum excepturi facilis, molestiae nobis, nostrum odit possimus quod ratione recusandae saepe veniam voluptatibus!',
            ],
            [
                'id'=>3,
                'name'=>'Alif',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi cum, dignissimos dolorem ea id ipsa ipsum magnam nam nihil numquam perspiciatis quae quisquam rerum tempore tenetur totam voluptate voluptates. Alias aliquam deserunt dolorem doloremque earum eum excepturi facilis, molestiae nobis, nostrum odit possimus quod ratione recusandae saepe veniam voluptatibus!',
            ],
            [
                'id'=>4,
                'name'=>'Alif',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi cum, dignissimos dolorem ea id ipsa ipsum magnam nam nihil numquam perspiciatis quae quisquam rerum tempore tenetur totam voluptate voluptates. Alias aliquam deserunt dolorem doloremque earum eum excepturi facilis, molestiae nobis, nostrum odit possimus quod ratione recusandae saepe veniam voluptatibus!',
            ],
            [
                'id'=>5,
                'name'=>'Alif',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi cum, dignissimos dolorem ea id ipsa ipsum magnam nam nihil numquam perspiciatis quae quisquam rerum tempore tenetur totam voluptate voluptates. Alias aliquam deserunt dolorem doloremque earum eum excepturi facilis, molestiae nobis, nostrum odit possimus quod ratione recusandae saepe veniam voluptatibus!',
            ],


        ];
    }

}
