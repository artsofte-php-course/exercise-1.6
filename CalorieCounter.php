<?php
require_once "ProductRepository.php";

class CalorieCounter
{
    private $eatenCalories;
    private $eatenProducts = [];
    private $productRepository;

    public function __construct($productRepository)
    {
        if (get_class($productRepository) != "ProductRepository"){
            throw new InvalidArgumentException($message = sprintf("invalid object type passed, expected ProductRepository, recieved %s", get_class($productRepository)));
        }

        $this->productRepository = $productRepository;
    }

    public function eaten($name, $quantity = 1, $weigt = -1)
    {
        $product = $this->productRepository->getProduct($name);
        if ($weigt !== -1)
        {
            $this->eatenCalories += $weigt / 100 * $product->getCalories();
        }
        else
        {
            $this->eatenCalories += $quantity * $product->getCalories();
        }
    }

    public function getEatenProducts()
    {
        return $this->eatenProducts;
    }

    public function getCalories()
    {
        return $this->eatenCalories;
    }
}