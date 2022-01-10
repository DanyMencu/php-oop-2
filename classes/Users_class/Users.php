<?php
/**
 * Users parent class
 */

class User {
    //Property
    protected $first_name;
    protected $last_name;
    protected $age;
    protected $sale;

    //Constructor
    public function __construct($first_name, $last_name, $age) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    //Full name function
    public function getFullName() { 
        return $this->first_name . ' ' . $this->last_name;
    }

    //Set sale if it's over 65
    protected function setSale() {
        $this->sale = $this->age > 65 ? 10 : 0;
    }

    public function getSale() {
        $this->setSale();

        return $this->sale;
    }
}

//Premium users
class Premium extends User{

    private $extra_sale = 2.5;
    protected $subscription_year;

    public function __construct($first_name, $last_name, $age, $subscription_year) {
        parent::__construct($first_name, $last_name, $age);

        $this->subscription_year = $subscription_year;
    }

    //Set extra sale in base since he is a subscriber and age
    private function setExtraSale() {
        $current_year = date('Y');
        if ($this->age < 70) {

            $this->sale = 5 + ($this->extra_sale * ($current_year - $this->subscription_year ) );
        }
        else {
            $this->sale = $this->sale + ($this->extra_sale * ($current_year - $this->subscription_year));
        }
    }

    public function getSale() { 
        $this->setExtraSale();

        return $this->sale;
    }
}

//Employees users
class Employees extends User {

    private $extra_sale = 10;
    protected $level;

    public function __construct($first_name, $last_name, $age, $level)
    {
        parent::__construct($first_name, $last_name, $age);

        $this->level = $level;
    }

    //Set extra sale in base of the level
    private function setExtraSale() {
        $this->sale = $this->extra_sale * ($this->level);
    }

    public function getSale() {
        $this->setExtraSale();

        return $this->sale;
    }
}