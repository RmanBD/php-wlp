<?php

namespace App\classes;
use App\classes\Person;

class Example extends Person
{
//    public $firstNmae = "Arman";
    public $firstNmae;
    protected $middleName;
    private $lastName;
    public $fistNmuber = 10;
    protected $secondNumber = 20;
    private $lastNumber = 30;

    public function index()
    {
//        echo 'hello peter';
//        echo $this->firstNumber;
//        $this->firstNumber = "Azim";
//        $this->firstNumber = 'soikot';
//        $x = 'bd';
//        $x = 10.34;
//        $x = '10.34';
//        echo $this->firstNumber;
//        echo gettype($x);
//        echo $this->firstNumber;
        $this->firstNmae = "MD.";
        echo $this->firstNmae;
    }

    public function methodOne()
    {
        $this->middleName='Arman';
        echo $this->middleName;
    }

    private function methodTwo()
    {
        $this->lastName='Hossain';
        echo $this->lastName;
    }

    public function methodThree()
    {
//        echo $this->district;
//        echo $this->division;
//        echo $this->country;
        $this->district();
        echo '<br/>';
        $this->division();
//        $this->country();
    }

}