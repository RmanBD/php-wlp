<?php


namespace App\classes;

use App\classes\User;
use App\classes\InterfaceClass;
class Student extends User implements InterfaceClass
{
    protected $country = 'Bangladesh';

    public function __construct()
    {
        $this->name = "BASIS";
        $this->city = "Saver";
    }

    public function manage()
    {
        echo $this->country;
    }

    public function one()
    {
        // TODO: Implement one() method.
        echo "some thing";
    }
    public function two()
    {
        // TODO: Implement two() method.
        echo "some thing";
    }
}