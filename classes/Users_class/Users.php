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
}