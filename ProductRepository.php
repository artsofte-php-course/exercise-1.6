<?php
require_once "Product.php";

class ProductRepository
{
    private $products = [];

    public function getProduct($key)
    {
        return $this->products[$key];
    }
    public function add($product){
        if (get_class($product) !== "Product"){
            throw new Exception(sprintf("invalid object type passed, expected Product, recieved %s", get_class($product)));
        }
        else if(array_key_exists($product->getName(), $this->products)){
            throw new Exception(sprintf("Product %s already exists in repository", $product->name));
        }
        $this->products[$product->getName()] = $product;
    }
}