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
}
elseif ($_POST['btn'])
{
    $word = new Word($_POST);
    $word->index();
}