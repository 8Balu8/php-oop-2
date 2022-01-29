<?php
class Cheese {
    public $brand;

    public $weight;

    public $milk;

    public $price;

    public function __construct($_brand, $_weight, $_milk, $_price) {
        $this->brand = $_brand;
        $this->weight = $_weight;
        $this->milk = $_milk;
        $this->price = $_price;
    }
}
?>