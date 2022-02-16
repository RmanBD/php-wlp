<?php

require_once "vendor/autoload.php";

use App\classes\Home;
use App\classes\FileUpload;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'file-upload'){
        include "pages/file-upload.php";
    }elseif ($_GET['pages'] == )

} elseif (isset($_POST['btn']))
{
    $fileUpload = new FileUpload($_POST, $_FILES);
    $massage = $fileUpload->index();
    include 'pages/fileUpload.php';
}