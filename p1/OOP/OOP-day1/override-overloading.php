<?php
//override 
// 2 method (access modifier, name , parameter) with diff body
// overloading 2 method (access modifier, name ) with diff ((body, parameter) // not exists in php
class phone{
    public function takePhotos(){
        echo "can take photo";
    }
    public function makeCalls(){
        echo "can make calls" ; 
    }
}

class samsung extends phone{
    public function takePhotos(){ //override
    // public function takePhotos($name){ //overloading array_intersect //dynamic parameter
        echo "can take photos from samsung";
    }
}
$objSamsung = new samsung;
$objSamsung->takePhotos();