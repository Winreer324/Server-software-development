<!-- task -->
<!-- вариант 11 -->
<!-- 
    Разработать три класса, которые следует связать между собой,
    используя наследование: класс Product, который имеет три элемент-данных
    — имя, цена и вес товара (базовый класс для всех классов);
    класс Buy, содержащий данные о количестве покупаемого товара в штуках,
    о цене за весь купленный товар и о весе товара 
    (производный класс для класса Product и базовый класс для класса Check);
    класс Check, не содержащий никаких элемент-данных.
    Данный класс должен выводить на экран информацию о товаре и о покупке 
    ( производный класс для класса Buy);
    Для взаимодействия с данными классов разработать set- и get—методы.
    Все элемент-данные классов объявлять как private.
 -->

<?php
 
require "check.php";

 
$check = new Check; 

// methord and item buy
echo $check->setCountOfProduct(42);
echo $check->setAllPriceProduct(21341234);
echo $check->setAllWeightProduct(512);
// methord and item product
echo $check->setName("lolka");
echo $check->setPrice(999);
echo $check->setWeight(12);
// methord and item buy
echo "<br>";
echo $check->getCountOfProduct();
echo "<br>";
echo $check->getAllPriceProduct();
echo "<br>";
echo $check->getAllWeightProduct();
echo "<br>";
echo $check->showCheck();
echo "<br>";
echo $check->showBuy();
echo "<br>";
echo "<br>";

echo $check->getName();
