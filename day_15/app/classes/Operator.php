<?php


namespace App\classes;


class Operator
{
//    ------operator------
//
//    Arithmatic operator
//        i. Binary Operator (+,-,*,/,%)
//        ii. Unary Operator (++,--,(-))
//
//    Assignment Operator (=, +=, -=, *=, /=, %=, .=)
//    Conditional Operator (>, >=, <, <=, ==, !=, ===, !==)
//    Logical Operator (&&, ||, !)

    public $x = 10;
    public $y = 20;

    public function index()
    {
        $this->x = 10;
        $this->y = 20;

        echo  $this->x++;
        echo '<br/>';
        echo  $this->x++;
        echo '<br/>';
        echo $this->x++;
//        echo $this->y++
//        echo 'hello wordl';
//        echo $this->x + $this->y;       // 30
//        echo "<br/>";
//        echo $this->x - $this->y;       // -10
//        echo "<br/>";
//        echo $this->x * $this->y;       // 200
//        echo "<br/>";
//        echo $this->x / $this->y;       // .5
//        echo "<br/>";
//        echo $this->x % $this->y;       // 10
//        echo "<br/>";
    }
}