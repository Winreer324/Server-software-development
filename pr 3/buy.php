<?php

require_once "product.php";

require_once "namespace_taxes.php";

// use nameTaxes;

//use Taxes;

class Buy extends Product{
    // new code
    use Taxes\Taxes;

    // public function taxСalculation1(){ echo "tax 1"; }
    // public function taxСalculation2(){ echo "tax 2"; }
    // public function taxСalculation3(){ echo "tax 3"; }    


    private $countOfProduct;
    private $allPriceProduct;
    private $allWeightProduct;

    public function getCountOfProduct(){
        return "count = $this->countOfProduct (шт) (Buy)";
    }
    public function getAllPriceProduct()  {
        // return "price = $this->allPriceProduct \$ (Buy)";
        return $this->allPriceProduct;
    }
    public function getAllWeightProduct(){
        return "weight = $this->allWeightProduct kg (Buy)";
    }

    public function setCountOfProduct($count){
        $this->countOfProduct = $count;
    }
    public function setAllPriceProduct($price){
        $this->allPriceProduct = $price;
            Taxes\Taxes::taxСalculation1($price);
    }
    public function setAllWeightProduct($weight){
        $this->allWeightProduct = $weight;
    }

    public function __toString(){
        return "countOfProduct = $this->countOfProduct (шт); allPriceProduct = $this->allPriceProduct \$; allWeightProduct = $this->allWeightProduct kg; (Buy)";
    }
}