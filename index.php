<?php
require('ClassCar.php');

$product = new shop();
$product->naming();

$person = new user();
echo $person->name;

$person1 = new user();
$person1->name = 'Nigan';
echo $person1->name;

$person1->surname = 'Niganovich';
echo $person1->surname;
echo $product->naming();
