<?php

class Product {
    private $name;
    private $price;
    private $weight;


    public function getName(){
        return "name = $this->name (Product)";
    }
    public function getPrice(){
        return "price = $this->price \$ (Product)";
    }
    public function getWeight(){
        return "weight = $this->weight kg (Product)";
    }

    public function setName($name){
        $this->name = $name;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function showBuy(){
        return 
        "<pre>Show All Item (Buy)
        ".$this->getCountOfProduct()."
        ".$this->getAllPriceProduct()."
        ".$this->getAllWeightProduct()."
        ".$this->getName()."
        ".$this->getPrice()."
        ".$this->getWeight();
    }

    public function __toString(){
        return "name = $this->name; price = $this->price \$; weight = $this->weight kg (Product)";
    }
}