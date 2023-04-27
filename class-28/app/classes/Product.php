<?php


namespace App\classes;
use App\classes\Category;


class Product
{
    public $products=[], $category, $categoryById;
    public function __construct()
    {
        $this->products=[
            [
                'id'=> 1,
                'category_id'=> 20,
                'product_name'=> 'Asus',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ducimus illo incidunt modi nemo quaerat quibusdam vel. Consectetur et, repellat',
                'price'=> '25000 tk',
                'image'=>'1.png',
            ],
            [
                'id'=> 2,
                'category_id'=> 21,
                'product_name'=> 'Nokia',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ducimus illo incidunt modi nemo quaerat quibusdam vel. Consectetur et, repellat',
                'price'=> '25200 tk',
                'image'=> '2.jpg',
            ],
            [
                'id'=> 3,
                'category_id'=>22,
                'product_name'=> 'LG',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ducimus illo incidunt modi nemo quaerat quibusdam vel. Consectetur et, repellat',
                'price'=> '25210 tk',
                'image'=> '3.webp',
            ],
            [
                'id'=> 4,
                'category_id'=> 23,
                'product_name'=> 'Vision',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ducimus illo incidunt modi nemo quaerat quibusdam vel. Consectetur et, repellat',
                'price'=> '25220 tk',
                'image'=> '4.jpg',
            ],
            [
                'id'=> 5,
                'category_id'=> 24,
                'product_name'=> 'HP',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ducimus illo incidunt modi nemo quaerat quibusdam vel. Consectetur et, repellat',
                'price'=> '25230 tk',
                'image'=> '1.jpg',
            ],
            [
                'id'=> 6,
                'category_id'=> 25,
                'product_name'=> 'Sony',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ducimus illo incidunt modi nemo quaerat quibusdam vel. Consectetur et, repellat',
                'price'=> '25240 tk',
                'image'=> '2.jpg',
            ],
        ];
    }

    public function getAllProducts(){
        return $this->products;


    }
    public function productDetails($id){
        $products = $this->getAllProducts();
        foreach ($products as $product) {
            if ($product['id']==$id){
                $this->category = new Category();
                $this->categoryById = $this->category->categoryById($product['category_id']);
                $product['category_name'] = $this->categoryById['category_name'];
                return $product;
            }

        }
    }


}