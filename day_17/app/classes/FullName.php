<?php


namespace App\classes;


class FullName
{
    public $firstName;
    public $lastName;
//    protected

    public function __destruct($data=null)
    {
        // TODO: Implement __destruct() method.
        //        echo 'Hello';
        echo '<pre>';
//        print_r($data);
//        exit();
        $this->firstName = $data ['first_Name'];
        $this->lastName = $data ['last_Name'];
    }

    public function index()
    {
//        echo 'in index';
//        echo $this->firstName;

//        header('Location: action.php?pages=full-name&&a=b&&Arman=14');
        header('Location: action.php?pages=full-name');
    }

    public function getFullName()
    {

    }


}