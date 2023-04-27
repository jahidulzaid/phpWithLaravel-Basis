<?php


namespace App\classes;


class Student
{
    public $students=[];
    public function __construct()
    {
        $this->students=[
            [
                'id'=> 1,
                'Name'=>'Biplob',
                'Phone'=>'01875598999',
                'Email'=>[
                    'Email-1'=>'biplob@gmail.com',
                    'Email-2'=>'biplob0@gmail.com',
                ],
                'seip-id'=>328037,
            ],
            [
                'id'=> 2,
                'Name'=>'Badol',
                'Phone'=>'01875598999',
                'Email'=>[
                    'Email-1'=>'biplob@gmail.com',
                    'Email-2'=>'biplob0@gmail.com',
                ],
                'seip-id'=>328037,
            ],
            [
                'id'=> 3,
                'Name'=>'Bijoy',
                'Phone'=>'01875598999',
                'Email'=>[
                    'Email-1'=>'biplob@gmail.com',
                    'Email-2'=>'biplob0@gmail.com',
                ],
                'seip-id'=>328037,
            ],
            [
                'id'=> 4,
                'Name'=>'Badsha',
                'Phone'=>'01875598999',
                'Email'=>[
                    'Email-1'=>'biplob@gmail.com',
                    'Email-2'=>'biplob0@gmail.com',
                ],
                'seip-id'=>328037,
            ],
            [
                'id'=> 5,
                'Name'=>'Batil',
                'Phone'=>'01875598999',
                'Email'=>[
                    'Email-1'=>'biplob@gmail.com',
                    'Email-2'=>'biplob0@gmail.com',
                ],
                'seip-id'=>328037,
            ],
        ];
    }
    public function getAllStudents(){
        return $this->students;
    }
}