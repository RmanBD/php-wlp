<?php


namespace App\classes;


class Category
{
    public function index()
    {
        return [
          0 =>[
              'id'      => 1,
              'name'    => 'home'
          ],
          1 =>[
              'id'      => 1,
              'name'    => 'File upload'
          ],
          2 =>[
              'id'      => 1,
              'name'    => 'File Write'
          ],
        ];
    }
}