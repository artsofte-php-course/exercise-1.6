<?php

class Product
{
    private $name;
    private $calories;
    private $proteins;
    private $fats;
    private $carbohydrates;
    private $defaultWeight;
    public function __construct($name, $calories, $proteins, $fats, $carbohydrates, $defaultWeight)
    {
        $this->name = $name;
        $this->calories = $calories;
        $this->proteins = $proteins;
        $this->fats = $fats;
        $this->carbohydrates = $carbohydrates;
        $this->defaultWeight = $defaultWeight;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function getCalories()
    {
        return $this->calories;
    }

}


