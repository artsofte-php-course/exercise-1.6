<?php

class Product
{
    public $name;
    public $calories;
    public $squirrels;
    public $fats;
    public $carbohydrates;
    public $defaultWeight;

    public function __construct($name, $calories, $squirrels, $fats, $carbohydrates, $defaultWeight)
    {
        $this->name = $name;
        $this->calories = $calories;
        $this->squirrels = $squirrels;
        $this->fats = $fats;
        $this->carbohydrates = $carbohydrates;
        $this->defaultWeight = $defaultWeight;
    }

}

class ProductRepository
{
    private $products;

    public function __construct(...$products)
    {
        foreach ($products as $product)
            $this->products[$product->name] = $product;
    }

    public function add($product){
        $this->products[$product->name] = $product;
    }

    public function getProduct($productName){
        return $this->products[$productName];
    }
}

class CalorieCounter{
    private $productRepository;
    private $eatenProducts;
    public function __construct($productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function eaten($productName, $count = null, $weight = null, $date = null){
        $portion = $count != null ? $this->productRepository->getProduct($productName)->defaultWeight * $count : $weight / 100;
        $this->eatenProducts[$productName] = ["product"=>$this->productRepository->getProduct($productName),
            "count" => $count != null ? $count : null,
            "weight" => $weight != null ? $weight : null,
            "portion" => $portion,
            "date" => $date != null ? $date : null];
    }

    public function getNutrients(){
        $eatenCalories = 0;
        $eatenSquirrels = 0;
        $eatenFats = 0;
        $eatenCarbohydrates = 0;
        $eatenProductsByDay = [];
        foreach ($this->eatenProducts as $eatenProduct){
            $eatenCalories += $eatenProduct["product"]->calories * $eatenProduct["portion"];
            $eatenSquirrels += $eatenProduct["product"]->squirrels* $eatenProduct["portion"];
            $eatenFats += $eatenProduct["product"]->fats * $eatenProduct["portion"];
            $eatenCarbohydrates += $eatenProduct["product"]->carbohydrates * $eatenProduct["portion"];
            $eatenProductsByDay[$eatenProduct["date"]][] = $eatenProduct;
            echo ($eatenCalories);
        }
    }
}
