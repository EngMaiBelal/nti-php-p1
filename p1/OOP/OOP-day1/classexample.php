<?php

class car { //local scope
    public $model; // adj
    public $maxSpeed;
    // public $sunRoof;
    public $color = "black"; //default value

    public function drive(){ // action 
        echo "forward";
    }
    public function reverse(){
        echo "backward";
    }
    
    // if ;;;;;;;
    // function ;;;;;
    // echo 
}

// global scope

// $obj = new car();
$obj = new car;
// echo($obj->color); //get
// $obj->model = "bmw"; //set 
// print_r($obj);
// $obj->newPropery= 'kkk';
// print_r($obj);
$obj->drive();


