<?php


namespace App\classes;



class Category
{
    public $categories=[];
    public function __construct()
    {
        $this->categories=[
            [
                'id'=>1,
                'category-name'=> 'Laptop',
            ],
            [
                'id'=>2,
                'category-name'=> 'Mobile',
            ],
            [
                'id'=>3,
                'category-name'=> 'Monitor',
            ],
            [
                'id'=>4,
                'category-name'=> 'Television',
            ],
        ];
    }

    public function getAllCategory(){
        return $this->categories;
    }
    public function categoryById($catId){
        $category=$this->getAllCategory();
        foreach ($category as $item) {
            if ($item['id'] == $catId){
                return $item;
            }
        }
    }
}