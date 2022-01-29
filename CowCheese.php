<?php
require_once __DIR__.'/Cheese.php';
class CowCheese extends Cheese
{
    // override
    public $milk='Cow\'s milk';

    public $typeCheese;

    // override
    public function __construct($_brand, $_weight, $_price, $_typeCheese)
    {
        parent::__construct($_brand, $_weight, $_price);
        $this->typeCheese=$_typeCheese;  
    }
}

?>