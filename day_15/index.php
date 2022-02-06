<?php

require_once 'vendor/autoload.php';
use App\classes\Example;
use App\classes\Operator;

$example = new Example();



//$example->index();
//echo '<br/>';
//$example->methodOne();
//echo '<br/>';
//$example->methodTwo();
//echo '<br/>';
//echo $example->fistNmuber.',';
//echo $example->secondNmuber.',';
//$example->methodThree();

$Operator = new Operator();
$Operator->index();

//echo '<br/> Arman';
//echo $myvar->firstNmae;