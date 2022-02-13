<?php


namespace App\classes;


class Product
{
 public function getAllProduct()
 {
     return[
         0=>[
             'id' => 1,
             'name' => 'New product',
             'description' =>'description',
             'image' => '1.jpg',
         ],
         1=>[
             'id' => 2,
             'name' => 'New T-shirt',
             'description' =>'description',
             'price' =>'500',
             'image' => '2.jpg',
         ],
         2=>[
             'id' => 3,
             'name' => 'New shari',
             'description' =>'description',
             'price' =>'10500',
             'image' => '3.jpg',
         ]
     ];
 }
}