<?php
require_once 'vendor/autoload.php';

use App\classes\Calculator;


if (isset($_GET['page'])){
    if ($_GET['page']=='home'){

        include 'pages/home.php';
    }elseif($_GET['page']=='calculate'){
        $calculator = new Calculator($_POST);
        $result = $calculator->index();
        include 'pages/home.php';

    }
}