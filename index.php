<?php
class Product
{
    public $name;
    public $description;
    public $price;
    public $category;

    public function __construct(string $name, string $description, int $price, string $category)
    {
        // set variables
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }
    public function getCategory()
    {
        return $this->category;
    }

    // modo per semplificare get e set
    // public function get($type){
    //     return $this->$type;
    // }
    // public function set($type,$argument1){
    //     $this->$type = $argument1;
    // }
}
