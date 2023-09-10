<?php 
// access modifier, visibility marker, access specifiers (puplic, protected, private)
//1- public    => global scope by obj , child classes , inside class // fb posts(general)
//2- protected => child classes , inside class                       // fb posts(friends)
//3- private   =>  inside class                                        // fb posts(only one)

class animal {
    //local scope , parent scope
    public $food = "cake";
    protected $name ="animal";
    private $color;
    public function eat(){
        $this->food;
        $this->name;
        $this->color;

    }
}
class cat extends animal {
    // child scope
    public function call(){
        $this->food;
        $this->name;
        // $this->color; //private
    }
}

class dog extends animal {
 
}

//puplic
//Global scope

$obj = new animal;
$obj ->food;
// echo($obj ->name); //protected
// echo($obj ->color); //private

// oop + solid principle + structure + design pattern// mvc
// advanced ex 
// encapsulation
// $_SERVER
