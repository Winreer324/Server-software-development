<?php
 
require_once "nameTaxes";

class Check extends Buy{
    public function showCheck(){
        return 
        "<pre>Show All Item (Check)
        ".$this->getCountOfProduct()."
        ".$this->getAllPriceProduct()."
        ".$this->getAllWeightProduct()."
        ".$this->getName()."
        ".$this->getPrice()."
        ".$this->getWeight();
    }
}
