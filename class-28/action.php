<?php
require_once 'vendor/autoload.php';
use App\classes\Product;
use App\classes\Student;

$product = new Product();

if(isset($_GET['page'])){
    if($_GET['page']=='home'){

        $products = $product-> getAllProducts();

        include 'pages/home.php';
    }elseif($_GET['page']=='student'){
        $student = new Student();
        $students = $student->getAllStudentsInfo();
        include 'pages/student.php';
    }elseif ($_GET['page']=='details'){
        $product_id = $_GET['id'];
        $details = $product->productDetails($product_id);
        include 'pages/details.php';
    }
}