<?php
// abstraction  --> abstract class, interface
// abstraction + polymorphism --> methods do the same things shouid be have the same name

// show necessary info(access modifier, property ,method), hide unnecessary info (implemation, details, body)

abstract class auth{
    public abstract function login();
    public abstract function logout();
}
class user extends auth{
    public  function login(){
        echo "user login";
    }
    public  function logout(){
        echo "user logout";
    }
}
class admin extends auth{
    public  function login(){
        echo "admin login";
    }
    public  function logout(){
        echo "admin logout";
    }
}



// products, cities, categories ---> crud opreation
// abstract class crud{
//     const x=5;
//     public $name;
//     public function test(){
//     }
//     public static $name2;
//     public static function test2(){  
//     }
//     public abstract function read();
//     public abstract function update();
//     public abstract function delete();
//     public abstract function create();
// }
// // $obj = new crud; 
// class products extends crud{
//     public  function read(){

//     }
//     public  function update(){

//     }
//     public  function delete(){

//     }
//     public  function create(){

//     }
// }
// $obj = new products;
