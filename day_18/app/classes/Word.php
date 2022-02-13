<?php


namespace App\classes;


class Word
{
    protected $inputValue;
    protected $type;
    protected $result;

    public function __construct($post)
    {
//        echo '<pre>';
//        print_r($post);
//        exit();
        $this->inputValue = $post['input_Value'];
        $this->type = $post['type'];
//        echo $this->inputValue;
    }

    public function index()
    {
//        if ($this->type == 'word')
//        {
//            $this->result = str_word_count($this->inputValue);
//        }
//        else
//        {
//            $this->result = strlen($this->inputValue);
//        }

        $this->result = [
            'givenWord' => $this->inputValue,
            'wordCount' => str_word_count($this->inputValue),
            'characterCount' => strlen($this->inputValue)
        ];
        return $this->result;

//        return $this->result;
    }
}