<?php

require_once 'vendor/autoload.php';

//use App\classes\Home;
use App\classes\FileUpload;

$home = new FileUpload();
$home->index();