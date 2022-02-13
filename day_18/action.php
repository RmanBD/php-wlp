<?php
require_once 'vendor/autoload.php';

use App\classes\Word;

//echo

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    else if ($_GET['pages'] == 'series')
    {
        include 'pages/series.php';
    }
}
elseif (isset($_POST['btn']))
{
    $word = new Word($_POST);
    $result = $word->index();
    extract($result);
    include 'pages/home.php';
}