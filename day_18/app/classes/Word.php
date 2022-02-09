<?php


namespace App\classes;


class Word
{
    protected $inputValue;
    protected $result;

    public function __construct($post)
    {
        $this->inputValue = $post['input_Value'];
//        echo $this->inputValue;
    }

    public function index()
    {
//        $this->result = str_word_count($this->inputValue);
        $this->result = strlen($this->inputValue);
        return $this->result;
    }
}