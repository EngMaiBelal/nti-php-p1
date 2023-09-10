<?php

// s21 : samsung , 128 GByte storage , 8 GRAM , has charger , resolution 1080p , dual apps, can take photos , can make calls
// iphone 12 : apple , 256 Gbyte storage, 6 GRAM , has n't charger , resolution 1080p. can take photos , can make calls
class phone{
    public $name;
    public $brand;
    public $storage;
    public $ram;
    public $roslution ='1080p';
    public $hasCharger;

    public function takePhotos($name){
        echo "can take photo from ".$name;
    }
    public function makeCalls(){
        echo "can make calls" . $this->name . $this->hello(); //refer current object 

    }
    public function hello(){
        echo "hello";
    }
}


$samsung = new phone;
$samsung->brand ="s21";
$samsung->name ="samsung";
$samsung->storage= '128mb';
$samsung->ram= '8g';
$samsung->hasCharger= true;
// $samsung->dualApps = true;  //set new property
// $samsung->takePhotos('samsung');
$samsung->makeCalls();
echo "<br>";

// print_r($samsung);
$apple = new phone;
$apple->brand ="iphone 12";
$apple->name ="apple";
$apple->storage= '256mb';
$apple->ram= '6g';
$apple->hasCharger= false;
$apple->makeCalls();

// print_r($apple);
