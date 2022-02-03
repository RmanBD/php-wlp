<?php
namespace App\classes;

class Example
{
    public $firstNumber = 10;
    public $firstName;
    public $lastName;

    public function index()
    {
//        echo "Hello Peter";
        $firstNumber = 20;
        $this->firstName = "Arman";
        $this->lastName = "Hossain";

        echo $this->firstNumber;
        echo '<br/>';
        echo $this->firstName;
        echo '<br/>';
        echo $this->lastName;
        echo '<br/>';
        echo $this->firstName." ".$this->lastName;
    }

}
