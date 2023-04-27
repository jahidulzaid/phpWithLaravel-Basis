<?php


namespace App\classes;


class Student
{
    public $students = [];
    public function  __construct()
    {
        $this->students =[
            [
                'id'=>1,
                'name'=>'Robin',
                'phone'=>'018845577866',
                'email'=>
                    [
                        'email-1'=>'robin-1@gmail.com',
                        'email-2'=>'robin-2@gmail.com'
                    ],
                'seipId'=>326691,
            ],
            [
                'id'=>1,
                'name'=>'Nasir',
                'phone'=>'018845577866',
                'email'=>
                    [
                        'email-1'=>'nasir-1@gmail.com',
                        'email-2'=>'nasir-2@gmail.com'
                    ],
                'seipId'=>324591,
            ],
            [
                'id'=>1,
                'name'=>'Ashiq',
                'phone'=>'018845577866',
                'email'=>
                    [
                        'email-1'=>'Ashiq-1@gmail.com',
                        'email-2'=>'Ashiq-2@gmail.com'
                    ],
                'seipId'=>326656,
            ],
            [
                'id'=>1,
                'name'=>'Rimon',
                'phone'=>'016845577866',
                'email'=>
                    [
                        'email-1'=>'Rimon-1@gmail.com',
                        'email-2'=>'Rimon-2@gmail.com'
                    ],
                'seipId'=>326258,
            ],
            [
                'id'=>1,
                'name'=>'Arif',
                'phone'=>'019845577866',
                'email'=>
                    [
                        'email-1'=>'Arif-1@gmail.com',
                        'email-2'=>'Arif-2@gmail.com'
                    ],
                'seipId'=>321487,
            ],
            [
                'id'=>1,
                'name'=>'Elias',
                'phone'=>'01785577866',
                'email'=>
                    [
                        'email-1'=>'Elias-1@gmail.com',
                        'email-2'=>'Elias-2@gmail.com'
                    ],
                'seipId'=>326000,
            ],
        ];
    }

    public function getAllStudentsInfo(){
        return $this->students;


    }

}