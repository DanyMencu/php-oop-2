<?php
/**
 * Products parent class
 */

class Product
{
    //Property
    protected $name;
    protected $type;
    protected $price;
    protected $quantity;
    protected $sale = 0;

    //Constructor
    public function __construct($name, $type, $price, $quantity)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getProduct() {
        return $this->name . '<br>' . $this->type;
    }

    //Set the discount based on how many products there are in stock
    protected function setSale() {
        if ($this->quantity < 10) {
            $this->sale = 10;
        }

        return $this->sale;
    }

    public function getPrice() {
        $this->setSale();

        if ($this->sale > 0) {
            $this->price = $this->price - ( ($this->price * $this->sale) / 100);
        }

        return number_format($this->price, 2);
    }
}

//Clothes
class Clothes extends Product {

    protected $size;
    protected $color;

    public function __construct($name, $type, $price, $quantity, $size, $color) {
        parent::__construct($name, $type, $price, $quantity);

        $this->size = $size;
        $this->color = $color;
    }

    public function getDescription() {
        return $this->size . ' - ' . $this->color;
    }
}

//Food
class Food extends Product {

    protected $month_duration;
    protected $fresh;

    public function __construct($name, $type, $price, $quantity, $month_duration)
    {
        parent::__construct($name, $type, $price, $quantity);

        $this->month_duration = $month_duration;
    }

    //Set the freshness if the duration is more than 2 month
    protected function setFreshness() {
        $this->fresh = $this->month_duration >= 2 ? 'SURGELATO' : 'FRESCO';
    }

    public function getFreshness() {
        $this->setFreshness();

        return $this->fresh;
    }

    //Set price if the product has less than 1 month of duration
    protected function setSale() {
        if ($this->month_duration <= 1) {
            $this->sale = 15;
        }
    }
}
