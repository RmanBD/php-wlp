<?php


namespace App\classes;


class Example
{
    public $name;
    public $data = [];

    public function index()
    {
//        echo 'hello peter';
//        $this->name ='BITM';
//        $this->name ='BASIS';
//        echo $this->name;
//        $this->data = [10, 20, 30, 'BITM', 'BASIS', 100.200, true];
////        echo $this->data[0];
//        foreach ($this->data as $key => $item)
//        {
//            echo $key. ' ' .$item. '<br/>';
//        }
        $this->data = [
            0 => [
                'name'      => 'Sagor',
                'email'     => 'Sagor@gmail.com',
                'mobile'    =>  [
                    'personal' => '123456',
                    'parent' => '654321'
                ]

            ],
            1 => [
                'name'      => 'Foysal',
                'email'     => 'Foysal@gmail.com',
                'mobile'    =>  [
                    'personal' => '789456',
                    'parent' => '987654'
                ]
            ],
            2 => 'BITM',
            3 => [
                'name'  => 'Sojib',
                'email'  => 'sojib@gmail.com',
                'mobile'  => '123546'
            ]

        ];
//
//        foreach ($this->data as $item)
//        {
//            if (is_array($item))
//            {
//                foreach ($item as $value)
//                {
//                    if (is_array($value))
//                    {
//                        foreach ($value as $v_value)
//                        {
//                            echo $v_value. ' ';
//                        }
//                    }
//                    else
//                    {
//                        echo $value. ' ';
//                    }
//
//                }
////                else
////                {
////                    echo $item;
////                }
//            }
//            else
//            {
//                echo '<br/>';
//            }
////            echo $item;
//
//        }

//        echo $this->data[1]['name'];
//        foreach ($this->data as $item)
//        {
//            echo $item['name']. ' ' .$item['email']. ' ' .$item['mobile']. '<br/>';
//
//        }
//        echo '<pre>';
//        print_r($this->data);
//        var_dump($this->data);

















    }

}