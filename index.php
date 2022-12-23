<?php
require_once "CalorieCounter.php";
require_once "Product.php";
require_once "ProductRepository.php";
$productRepository = new ProductRepository();

$calories = 100;
$squirrels = 15;
$fats = 15;
$carbohydrates = 15;
$defaultWeight = 75;


$productRepository->add(new Product("egg", $calories, $squirrels, $fats, $carbohydrates, $defaultWeight));


$calorieCounter = new CalorieCounter(123);

$calorieCounter->eaten("egg", 1);


echo $calorieCounter->getCalories();