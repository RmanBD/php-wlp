<?php

//session_start();


//echo session_id();

//$_SESSION['name'] = 'BITM';
//$_SESSION['city'] = 'Dhaka';
//$_SESSION['country'] = 'Bangladesh';
//$_SESSION['mobile'] = '01821743405';

require_once 'vendor/autoload.php';

use App\classes\Home;
use App\classes\Student;

//$home = new Home();
//$home->index();

$student = new Student();
$student->manage();