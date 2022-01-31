<?php
trait Cart{
    protected $cart=[];

    // Add product in cart
    public function addProduct($product) {
        $this->cart[]=$product;
    }

    public function getCart() {
        return $this->cart;
    }
}
?>