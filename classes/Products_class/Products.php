<?php
/**
 * Products parent class
 */

class User
{
    //Property
    protected $name;
    protected $price;
    protected $type;
    protected $sale;

    //Constructor
    public function __construct($name, $price, $type)
    {
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
    }
}
