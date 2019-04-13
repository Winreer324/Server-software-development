<?php

//     Разработать трейт (в отдельном пространстве имён)
//      Taxes описывающий 3 различных метода вычисления налога, +
//       которые вызываются в классе Buy при вычислении итоговой цены.
//        Так же создать интерфейс с методом, проверяющим,
//         не поднялась ли новая цена больше чем на 100% от базово

require_once "check.php";
// require_once "namespace_taxes.php";
 
// use nameTaxes as t;
// $t->taxСalculation1();
// use Texas as t;
$b = new Buy();
// $pokypka->taxСalculation1();
// $b->setAllPriceProduct(30);
// $b->setPrice(30);
echo "<br>";
$c = new Check();
$c->setAllPriceProduct(12330);
$c->setPrice(31012);
echo $c->check();   
// echo $ch->nameTaxes->taxСalculation1();