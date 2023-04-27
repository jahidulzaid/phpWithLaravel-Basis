<?php


namespace App\classes;
use App\classes\Category;


class Product
{
    public $products=[],$category,$categoryById, $res;
    public function __construct()
    {
        $this->products=[
            [
                'id'=> 1,
                'category_id'=> 1,
                'product_name'=> 'Asus',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ducimus illo incidunt modi nemo quaerat quibusdam vel. Consectetur et, repellat',
                'price'=> '25000 tk',
                'image'=>'laptop.avif',
            ],
            [
                'id'=> 2,
                'category_id'=> 1,
                'product_name'=> 'Nokia',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ducimus illo incidunt modi nemo quaerat quibusdam vel. Consectetur et, repellat',
                'price'=> '25200 tk',
                'image'=> 'mobile.avif',
            ],
            [
                'id'=> 3,
                'category_id'=>1,
                'product_name'=> 'LG',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ducimus illo incidunt modi nemo quaerat quibusdam vel. Consectetur et, repellat',
                'price'=> '25210 tk',
                'image'=> 'monitor.avif',
            ],
            [
                'id'=> 4,
                'category_id'=> 1,
                'product_name'=> 'Vision',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ducimus illo incidunt modi nemo quaerat quibusdam vel. Consectetur et, repellat',
                'price'=> '25220 tk',
                'image'=> 'tv.avif',
            ],
            [
                'id'=> 5,
                'category_id'=> 2,
                'product_name'=> 'HP',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ducimus illo incidunt modi nemo quaerat quibusdam vel. Consectetur et, repellat',
                'price'=> '25230 tk',
                'image'=> 'watch.avif',
            ],
            [
                'id'=> 6,
                'category_id'=> 3,
                'product_name'=> 'Sony',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ducimus illo incidunt modi nemo quaerat quibusdam vel. Consectetur et, repellat',
                'price'=> '25240 tk',
                'image'=> 'wh.avif',
            ],
        ];
    }

    public function getAllProducts(){
        return $this->products;
    }
    public function productDetails($id){
        $products=$this->getAllProducts();
        foreach ($products as $product){
            if ($product['id']==$id){
                $this->category =new Category();
                $this->categoryById=$this->category->categoryByID($product['category_id']);
                $product['category_name'] =$this->categoryById['category-name'];
                return $product;
            }
        }
    }
    public function getProductByCategory($catId){
        $products = $this->getAllProducts();
        foreach ($products as $product) {
            if ($product['category_id']==$catId){
                array_push($this->res, $product);
            }

        }
        return $this->res;
    }
}