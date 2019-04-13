<?php
 
require_once "buy.php";

// require_once "namespace_taxes.php";

require_once "interfaceCheck.php";
// interface CheckTexas{
//     public function check();
// }

// use Taxes;
class Check extends Buy implements CheckTexas{
    // use Taxes;

    public function check() {
        // $num = $this->allPriceProduct;
        // var_dump($num);
        // $num += $price;
        @$num = $this->getAllPriceProduct();
        $result = $this->getAllPriceProduct() - $this->getPrice();
        
        if($num > $result){
            return "больше 100 %";
        }
        if($num <= $result){
            return "меньше 100 %";
        }
    }


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
