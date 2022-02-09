<?php


namespace App\classes;


class Word
{
    protected $inputValue;

    public function __construct($post)
    {
        $this->inputValue = $post['input_Value'];
        echo $this->inputValue;
    }

    public function index()
    {
        echo $this->inputValue;
    }
}