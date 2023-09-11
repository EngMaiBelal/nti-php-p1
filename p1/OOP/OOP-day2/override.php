<?php 
// polymorphism ---> override +inherite
class login{
    public function printHello(){
        echo "hello";
    }
}

class admin extends login{
    public function printHello(){
        echo "hello user";
    }
}