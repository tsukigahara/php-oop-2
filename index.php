<?php
class Product
{
    private $name;
    private $description;
    private $price;
    private $category;
    private ProductType $productType;

    public function __construct(string $name, string $description, float $price, string $category, ProductType $productType)
    {
        // set variables
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
        $this->productType = $productType;
    }

    // setter getter methods
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
    public function setProductType($productType)
    {
        $this->productType = $productType;
    }
    public function getProductType()
    {
        return $this->productType;
    }

    // modo per semplificare get e set? si può?
    // public function get($type){
    //     return $this->$type;
    // }
    // public function set($type,$argument1){
    //     $this->$type = $argument1;
    // }

    // Print on HTML 
    public function getHTML()
    {
        return
            "Product name: " . $this->name . "<br>"
            . "Description: " . $this->description . "<br>"
            . "Price: " . $this->price . "<br>"
            . "Category: " . $this->category . "<br>"
            . "Product type: " . $this->productType->getName() . "<br><br>";
    }
}

class ProductType
{
    private $name;
    private $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    // setter getter methods
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

    // Print on HTML
    public function getHTML()
    {
        return "Product type: " . $this->name . "<br>"
            . "Description: " . $this->description . "<br> <br>";
    }
}
// product type instances
$toys = new ProductType("Giochi", "Giochi per animali");
$foods = new ProductType("Cibo", "Cibo per animali");

// product instances
$product1 = new Product("Palla da gioco", "una bellissima palla da gioco per cani.", 9.86, "Cani", $toys);
$product2 = new Product("Snacks per gatti arrabbiati ", "Assortimento snacks per gatti arrabbiati. Contiene: lorem", 12.99, "Gatti", $foods);

echo "<h2> Products </h2>";
echo $product1->getHTML();
echo $product2->getHTML();

echo "<h2> Product Types </h2>";
echo "<small>" . $toys->getHTML() . "</small>";
echo "<small>" . $foods->getHTML() . "</small>";
