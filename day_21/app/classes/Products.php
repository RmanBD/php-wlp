<?php


namespace App\classes;


class Products
{
    protected $allProducts;
    protected $result = [];

    public function index()
    {
        return[
            0=>[
                'id'            => 1,
                'category_id'   => 1,
                'name'          => 'T-shirt-man',
                'price'         => 700,
                'description'   => 'new arrived',
                'image'         => 'assets/img/m1.jpg'
            ],
            1=>[
                'id'            => 2,
                'category_id'   => 1,
                'name'          => 'T-shirt-2-man',
                'price'         => 900,
                'description'   => 'new arrived',
                'image'         => 'assets/img/m2.jpg'
            ],
            2=>[
                'id'            => 3,
                'category_id'   => 2,
                'name'          => 'salwar-1-woman',
                'price'         => 1000,
                'description'   => 'new arrived',
                'image'         => 'assets/img/w1.jpg'
            ],
            3=>[
                'id'            => 4,
                'category_id'   => 2,
                'name'          => 'salwar-2-woman',
                'price'         => 1000,
                'description'   => 'new arrived',
                'image'         => 'assets/img/w2.jpg'
            ],
            4=>[
                'id'            => 5,
                'category_id'   => 3,
                'name'          => 'kids-T-shirt-1',
                'price'         => 1000,
                'description'   => 'new arrived',
                'image'         => 'assets/img/k1.jpg'
            ],
            5=>[
                'id'            => 6,
                'category_id'   => 3,
                'name'          => 'kids-T-shirt-2',
                'price'         => 1000,
                'description'   => 'new arrived',
                'image'         => 'assets/img/k2.jpg'
            ],
        ];
    }

    public function shortProducts($categoryId)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product) {
            if ($product['category_id'] == $categoryId) {
//                $this->result .=$product;
                array_push($this->result, $product);
            }

        }
        return $this->result;
    }
}