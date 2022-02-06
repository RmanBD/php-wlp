<?php


namespace App\classes;


class Person
{
    public $district = 'savar';
    Protected $division = 'Dhaka';
    private $country = 'Bangladesh';

    public function district()
    {
        echo 'Savar';
    }
    protected function division()
    {
        echo 'Dhaka';
        $this->country();
    }
    private function country()
    {
        echo "Bangladesh";
    }
}