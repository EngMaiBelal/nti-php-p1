<?php
// declare(strict_types=1);
// function functionName(i/ps){ //decleration / prototype
//     //body;              //implementation
//     o/p;                 //return
// }
// parameters decleration
// arguments invoke

// no i/ps, no o/ps
// hello();
// echo "nti<br>";
// function hello() : void{
//     echo 'hello';
// }

// echo $x;
// $x =5;

//has i/ps has o/ps
// $x = 5;
// $y = 55;

// function sum($x, $y){
//     return $x + $y;
// }

// echo (sum(10,20));

// // has i/ps no o/ps
// function hello($name){
//     echo 'hello '. $name;
// }
// hello('mahmoud');

// has o/ps no i/ps
// function hello2(){
//     $msg = 'hello';
//     echo $msg;
//     return $msg;
// }
// echo(hello2());
// SOLID principles (task)
// single responsbility
// sum multi divi sub 

// optional parameter

// type hint
// function sum(int $x, float $z, int $y) : float{
//     return $x + $y + $z;
// }
// echo(sum(5.5, 1, 10));


// if(true){
//     $msg='hhhh';
// }
// echo $msg;
///////////////////////////////////////////////////////////////////////////
// scoping
//local scope, global scope 

// var send as parameter //value
// $name ='ahmed'; //global scope 
// function name($name){
//     // $msg = 'ok'; //local
//     $name = 'basma';
//     echo $name;
//     return $name;
// }
// echo($name); //ahmed
// name($name); //basma
// echo($name); //ahmed
///////////////////////////////////////////////////////////////////////////
// send var as parmater ref &
// $counter =1;
// function increaseCounter(&$counter){
//     return ++$counter;
// }

// echo increaseCounter($counter);
// echo increaseCounter($counter);
// echo increaseCounter($counter);

///////////////////////////////////////////////////////////////////////////
// //global refrence
// $name ='ahmed'; //global scope 

// function name2(){
//     global $name; //ahmed
//     $name ='mai'; //mai
//     return $name;
// }
// echo $name; //ahmed
// echo '<br>';
// echo(name2()); //mai
// echo '<br>';
// echo $name;  // mai

// $counter =1 ; // return 5
// function increaseCounter($counter){
//     $counter+=4;
//     return $counter;
// }
// echo increaseCounter($counter);
// echo '<br>';
// echo $counter;

///////////////////////////////////////////////////////////////////////////
// $counter =1 ; // return 5
// function increaseCounter(){
//     global $counter;
//     $counter+=4;
//     return $counter;
// }
// echo increaseCounter(); //5
// echo increaseCounter(); //9
// echo '<br>';
// echo $counter; //9

///////////////////////////////////////////////////////////////////////////
// function increaseCounter(){
//     static $counter = 1; // local
//     // return ++$counter; //2 3 4
//     return $counter++; //1 2 3 4
// }

// echo increaseCounter();
// echo increaseCounter();
// echo increaseCounter();
// echo increaseCounter();

///////////////////////////////////////////////////////////////////////////
// send fun as a argument
// $counter =1;
// function increaseCounter($counter){
//     return ++$counter;
// }
// // echo $counter; 
// echo increaseCounter(increaseCounter(increaseCounter($counter)));

///////////////////////////////////////////////////////////////////////////
//recursive (fun call itself) with custom condition

// function increaseCounter($counter, $noOfIteration){
//     if($counter == $noOfIteration){
//         return $counter;
//     }else{
//         $counter++;
//         return increaseCounter($counter, $noOfIteration);
//     }
// }
// echo increaseCounter(1, 5);


// function increaseCounter($counter){
//     if($counter == 5){
//         return $counter;
//     }else{
//         $counter++;
//         return increaseCounter($counter);
//     }
// }
// echo increaseCounter(1);

////////////////////////////////////////////////////
// local ---> global
function hello2(){
    $y ='ali';
    $msg = 'hello';
    return [$msg, $y];    
}

$x = hello2();
print_r($x);
