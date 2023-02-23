<?php


namespace App\classes;


class HelloWorld
{
    public $firstName, $lastName;
    public $x, $y, $z;
    public function __construct()
    {
        $this->firstName = 'jahidul';
        $this->lastName = 'Islam';
        $this->x = 10;
        $this->y = 20;

    }
    public function index()
    {
        echo $this->firstName. '<br>'.$this->lastName;

        //operator

//        arithmetic    : + - * / ++ --
//        logical       : and - &&, or - ||, not - !
//        conditional   : ==, true, false, !=, !==, >=, <, >,
        echo '<br>';
        echo $this->x + $this->y;
        echo '<br>';
        echo $this->x - $this->y;
        echo '<br>';
        echo $this->x * $this->y;
        echo '<br>';
        echo $this->x / $this->y;
        echo '<br>';
        echo $this->x % $this->y;
        echo '<br>';




    }

}