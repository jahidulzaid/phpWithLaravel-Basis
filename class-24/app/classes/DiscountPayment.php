<?php


namespace App\classes;


class DiscountPayment
{
    public $money = 10000;
    public $selectCard =1, $checkBank, $cityBank=2;
    public $amount, $discount, $payable_amount;


    public function __construct()
    {


    }

    public function discountPayment(){
        //checking if total shopping amount exceed 10k
        echo 'discount managemnet system';
        echo '<br>';

        if ($this->money>=10000){
            echo 'Total payment is above 10k';
            echo '<br>';
            switch (1){

                case 1:
                    echo 'Credit Card';
                    echo '<br>';
                    $this->checkBank = readline("enter bank: ");
                        switch (1){
                            case 1:
                                echo 'citybank';
                                echo '<br>';
                                    switch (1){
                                        case 1:
                                            echo 'dicount 20%';
                                            echo '<br>';
                                            break;
                                    }
                                break;
                            case 3:
                                echo 'Brack_bank';
                                switch (1){
                                    case 1:
                                        echo 'dicount 25%';
                                        echo '<br>';
                                        break;
                                }
                                break;
                            case 4:
                                echo 'onebank';
                                switch (1){
                                    case 1:
                                        echo 'dicount 30%';
                                        echo '<br>';
                                        break;
                                }
                                break;

                        }
                    break;
                case 2:
                    echo 'Debit Card';
                    {
                        switch (1) {
                            case 1:
                                echo 'citybank';
                                switch (1) {
                                    case 1:
                                        echo 'dicount 5%';
                                        echo '<br>';
                                        break;
                                }
                                break;
                            case 3:
                                echo 'Brack_bank';
                                switch (1) {
                                    case 1:
                                        echo 'dicount 10%';
                                        echo '<br>';
                                        break;
                                }
                                break;
                            case 4:
                                echo 'onebank';
                                switch (1) {
                                    case 1:
                                        echo 'dicount 15%';
                                        echo '<br>';
                                        break;
                                }
                                break;

                        }
                        break;
                    }
                default:
                    echo 'Wrong choices';
            }
        }

    }


}