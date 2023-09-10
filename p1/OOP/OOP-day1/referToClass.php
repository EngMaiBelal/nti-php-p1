<?php

class bmw {
//    public $model = '2023';
//    public function autoParking(){
//     // echo "auto parking ".  bmw::BRAND;
//     echo "auto parking ".  self::BRAND; // refer current class
//    }
//    const BRAND = "bmw"; // access const  global, local scope
   public static $name ="x";
   public static function staticMethod(){
    echo "static";
    // self::$name;
    // bmw::$name;
   }

}

// echo bmw::BRAND;  //global , scope resolution operator
// $obj = new bmw;
// print_r($obj);
// $obj->autoParking();
// print_r($obj);

// echo(bmw::$name);


   
