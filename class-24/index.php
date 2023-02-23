<?php

require_once 'vendor/autoload.php';

use App\classes\HelloWorld;
use App\classes\DiscountPayment;


$helloWorld = new HelloWorld();
$discountPayment = new DiscountPayment();


//$helloWorld->index();

$discountPayment->discountPayment();

