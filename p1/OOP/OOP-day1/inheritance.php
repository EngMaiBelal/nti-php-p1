<?php
// inheritance 
    // reduce duplication of code
    // code in class can be use in other class
    // extends
    // php single inheritance
class mobile { //parent
    public $modelNumber;
    public $camera =true;
    public $battery;
    public function takePhotos(){
        echo "can take photo from ";
    }
    public function makeCalls(){
        echo "can make calls";
    }
    public $new ='jjjj';
    // property, method, constants, static property, static method --> inherit (access)
}


class samsung extends mobile{  //child
   public $pen = true;
   public $theme ='one ui';
}
class apple extends mobile{
    public $faceId = 'true';
}

$objSamsung = new samsung;
print_r($objSamsung);