<?php
class Cheese {
    public $farmer;

    public $weight;

    public $milk='';

    public $price;

    public function __construct($_farmer, $_weight, $_price) {
        $this->farmer = $_farmer;
        $this->weight = $_weight;
        $this->price = $_price;

        if(is_int($_price)) {
            $this->price = $_price;
        } else {
            throw new Exception('$_price deve contenere numeri');
        }
    }
}
?>