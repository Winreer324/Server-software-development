<?php

require "product.php";

class Buy extends Product{
    private $countOfProduct;
    private $allPriceProduct;
    private $allWeightProduct;

    public function getCountOfProduct(){
        return "count = $this->countOfProduct (шт) (Buy)";
    }
    public function getAllPriceProduct(){
        return "price = $this->allPriceProduct \$ (Buy)";
    }
    public function getAllWeightProduct(){
        return "weight = $this->allWeightProduct kg (Buy)";
    }

    public function setCountOfProduct($count){
        $this->countOfProduct = $count;
    }
    public function setAllPriceProduct($price){
        $this->allPriceProduct = $price;
    }
    public function setAllWeightProduct($weight){
        $this->allWeightProduct = $weight;
    }

    public function __toString(){
        return "countOfProduct = $this->countOfProduct (шт); allPriceProduct = $this->allPriceProduct \$; allWeightProduct = $this->allWeightProduct kg; (Buy)";
    }
}