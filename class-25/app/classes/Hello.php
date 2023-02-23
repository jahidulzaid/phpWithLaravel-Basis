<?php


namespace App\classes;


class Hello
{
    public $x, $y;
    public $arr;
    public function __construct()
    {
        //$this is a own class object
        $this->x = 1;
        $this->y = 200;
        $this->arr;
        $this->student =[];

    }
    public function index(){

        /*
        for( $this->x = 10; ($this->x <= $this->y ); $this->x++){
            echo $this->x.'<br>';
        }
        //
        while($this->y--){
            echo $this->x++.'<br>';
        }
        //
        do{
            echo $this->x++;
        }while(0);



        $this->arr = array(
            0 => 'apple',
            'a' => 'apple',
            2 => 'apple',

        );


        print_r($this->arr);
        echo '<br>';
        var_dump($this->arr);


        foreach ($this->arr as $this->item) {
            echo $this->item . '<br>';
        }

        */



        $this->student = [
            0 =>
                [
                'id' => 1,
                'name' => 'Elias',
                'seipId' => 323342,
                'email' => 'yourEmail@gmail.com'
                ],
            [
                'id' => 2,
                'name' => 'Bilias',
                'seipId' => 323344,
                'email  :' =>
                    ['yourEmail@gmail.com','yourEmail2@gmail.com' ]
            ],
            [
                'id' => 1,
                'name' => 'Tilias',
                'seipId' => 323346,
                'email  :' => 'yourEmail@gmail.com'
            ]
        ];

        foreach ($this->student as $this->item) {
            echo '<br>' ;
            foreach ($this->item as $this->value) {
                if(is_array($this->value)){
                    foreach ($this->value as $this->value){
                        echo $this->value . '<br>';
                    }
                }
                else{
                    echo $this->value . '<br>';
                }
            }

//            print_r($this->item);
        }


    }
}