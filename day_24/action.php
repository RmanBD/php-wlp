<?php

require_once 'vendor/autoload.php';

use App\classes\Auth;
use App\classes\StudentInfo;



if (isset($_GET['pages'])) {
    if ($_GET['pages'] == 'login') {
        $raihan = '';
        include 'pages/login.php';
    }
    elseif($_GET['pages'] == 'home') {
        $raihan = '';
        include 'pages/home.php';
    }
    elseif($_GET['pages'] == 'logout') {
        $a = new Auth();
        $a->logout();
    }
    elseif ($_GET['pages'] == 'view') {
        $file = new StudentInfo();
        $students = $file->getAllStuInfo();
        include 'pages/view.php';
    }
}
elseif (isset($_POST['btn'])){
    $sInfo = new StudentInfo($_POST, $_FILES);
    $raihan= $sInfo->info();
    include 'pages/home.php';
}
elseif (isset($_POST['loginBtn'])){
    $loginInfo = new Auth();
    $raihan =  $loginInfo->info();
    include 'pages/login.php';
}



