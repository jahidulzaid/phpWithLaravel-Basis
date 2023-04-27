<?php
require_once 'vendor/autoload.php';
use App\classes\Student;
use App\classes\Product;
use App\classes\Category;

$product=new Product();
$category = new Category();
$categories = $category->getAllCategory();

if (isset($_GET['page'])){
    if ($_GET['page']=='home'){

        $products= $product->getAllProducts();

        include 'pages/home.php';
    }elseif ($_GET['page']=='student'){
        $student =new Student();
        $students= $student->getAllStudents();
        include 'pages/student.php';
    }elseif ($_GET['page']=='details'){
        $product_id=$_GET['id'];
        $details=$product->productDetails($product_id);
        include 'pages/details.php';
    }elseif ($_GET['page']=='category'){
        $categoryId=$_GET['id'];
        $products=$product->getProductByCategory($categoryId);
        include 'pages/category.php';
    }
}