<?php
// $engine encapsulation
// __constract //magic method
class car {
    private $engine;

    public function __construct(){
        echo "hello";
    }

    public function drive(){
        $this->__construct();
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
class bmw extends car{
    public function __construct(){
        echo "hello from bmw <br>";
    }
    public function test(){
        // car::__construct();
        parent::__construct();
    }
}
// echo"nti<br>";
// $objBMW = new car;
// echo"<br>";
// $objBMW->drive();

// $objToyota = new car;
$bmw = new bmw;
$bmw->test();
