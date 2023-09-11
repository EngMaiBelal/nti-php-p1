<?php

class car {
    private $engine;

    // public function __construct($direction){
    //     echo "move $direction";
    // }

    public function drive(){
        // $this->__construct();
        // echo __FILE__; //C:\xampp-8.2.4\htdocs\nti\p1\OOP\OOP-day2\constructorArgs.php
        // echo __DIR__; 
        // echo __CLASS__; 
        // echo __METHOD__;
        // echo __FUNCTION__;
        // echo __LINE__;
    }
    /**
     * Get the value of engine
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * Set the value of engine
     */
    public function setEngine($engine): self
    {
        $this->engine = $engine;

        return $this;
    }
}
// $car = new car('reverse');
$car = new car();
$car->drive();

