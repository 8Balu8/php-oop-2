<?php
require_once __DIR__ . '/Cart.php';
class User
{
    public $name;
    public $lastname;
    public $email;
    use Cart;


    public function __construct($_name, $_lastname, $_email) {
        $this->name=$_name;
        $this->lastname=$_lastname;
        $this->email=$_email;
    }

    public function getFullName() {
        return $this->name. ' ' .$this->lastname;
    }
}
?>