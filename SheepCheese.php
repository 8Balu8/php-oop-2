<?php
require_once __DIR__.'/Cheese.php';
class SheepCheese extends Cheese
{
    // override
    public $milk='Sheep\'s milk';

    public $typeCheese;

    // override
    public function __construct($_brand, $_weight, $_price, $_typeCheese)
    {
        parent::__construct($_brand, $_weight, $_price);
        $this->typeCheese=$_typeCheese;  
    }


}

?>