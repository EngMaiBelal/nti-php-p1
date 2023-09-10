<?php 

class car {
    public $color;
    public function increaseBlack(){
        $this->color.= '+black';
        return $this;
    }
    public function increaseWhite(){
        $this->color.= '+white';
        return $this;
    }
    
}
$obj = new car;
// $obj->color = 'blue';  // logical error
($obj->increaseBlack()->increaseBlack()->increaseBlack()->increaseBlack()->increaseWhite()->increaseBlack()); //chainingMethod
// $obj->increaseBlack();
// $obj->increaseBlack();
// $obj->increaseBlack();
// $obj->increaseBlack();
print_r($obj->color);
// $('p').click. hover. on()