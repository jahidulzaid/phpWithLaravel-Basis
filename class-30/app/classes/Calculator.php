<?php


namespace App\classes;


class Calculator
{
    public $firstNumber, $lastNumber, $operator, $result;
    public function __construct($data)
    {
        $this->firstNumber =$data['first_name'];
        $this->lastNumber =$data['last_name'];
        $this->operator =$data['operator'];
    }

    public function index(){
    switch ($this->operator){
        case '+':
            $this->result = $this->addition();
            break;
        case '-':
            $this->result = $this->subtraction();
            break;
        case '*':
            $this->result = $this->multiplication();
            break;
        case '/':
            $this->result = $this->division();
            break;
        default:
            $this->result = '0';
            break;
    }
    return $this->result;
    }


    public function addition(){
        return $this->firstNumber + $this->lastNumber;
    }
    public function subtraction(){
        return $this->firstNumber - $this->lastNumber;
    }
    public function multiplication(){
        return $this->firstNumber * $this->lastNumber;
    }
    public function division(){
        return $this->firstNumber / $this->lastNumber;
    }
}