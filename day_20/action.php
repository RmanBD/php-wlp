<?php

require_once "vendor/autoload.php";

use App\classes\Home;
use App\classes\Calculator;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include "pages/home.php";
    }
} elseif (isset($_POST['btn']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->index();
    include "pages/home.php";
}