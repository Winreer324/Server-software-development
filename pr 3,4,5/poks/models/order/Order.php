<?php

namespace app\models\order;

class Order{
    public $title;
    public $amount;
    public $price;
    public $description;
   
    public function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
    }
}
