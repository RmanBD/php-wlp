<?php


namespace App\classes;


class Series
{
    protected $staringNumber;
    protected $endingNumber;
    protected $type;
    protected $i;
    protected $result;
    protected $tempStart;
    protected $tempEnd;

    public function __construct($data = null)
    {
        $this->staringNumber = $data['starting_number'];
        $this->endingNumber  = $data['ending_number'];
        $this->endingNumber  = $data['data'];
    }

    public function index(){
//        for($this->i = $this->staringNumber; $this->i <= $this->endingNumber; $this->i++)
//        {
//            $this->result.= $this->i." ";
//        }
        if ($this->type == 'asc')
        {
            if ($this)
            {
                $this->tempStart = $this->staringNumber;
                $this->tempEnd   = $this->endingNumber;
            }
            else
            {
                $this->tempStart    = $this->endingNumber;
                $this->tempEnd      = $this->staringNumber;
            }
            for($this->i = $this->tempStart; $this->i <= $this->tempEnd; $this->i++)
            {
                $this->result .= $this->i. ' ';
            }
        }


        return $this->result;
    }
}