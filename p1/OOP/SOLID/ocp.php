<?php
// open closed principle
// open to extention closed to modification --> ex shape

// <!-- circle, square, triangle -->
// <!-- area -->
// function area(){
//     if($shape == 'circle'){

//     }elseif($shape == 'square' ){

//     }elseif()
// }
interface area{
     function calcArea($x);
}
class circle implements area{
    public function calcArea($x){
        echo pi()*$x**2;
    }
}
class square implements area{
    public function calcArea($x){
        echo $x**2;
    }
}
class rectangle implements area{

    public function calcArea($x){
        echo $x;
    }
}

// problem solving