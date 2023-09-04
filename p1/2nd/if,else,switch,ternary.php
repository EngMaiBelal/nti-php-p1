<?php

$x = 0;
$y = 0;
// $y = 3;
// if(condition true|| false){
//     // body
// }

// if($x){
//     // echo $x;
//     // echo "ok";
//     $msg = "ok";
// }else{
//     $msg = 'error';
// }
// echo $msg;

// 0 , false , '' , '0', [], null , (object)[]

// if, else 50
// $user = 'mai';
// $id = 5;
// $gender = 'f';

// if($gender == 'f'){
//     echo 'female';
// }else{
//     echo 'male';
// }

// if, elseif, else
// $color = 'black';
// if($color == 'black'){
//     echo 'my favorite color is '. $color.'<br>';
//     echo "my favorite color is $color <br>";
    // echo 'my favorite color is $color <br>';

// }elseif($color == 'red'){
//     echo 'red';
// }else{
//     echo 'other';
// }

//ex weather <14 cold weather
// weather >14  <20 warm weather
// weather >20  <30 hot weather
// weather >30 very hot weather

$weather = 5;
if($weather < 14){
    echo "cold weather";
}elseif($weather >= 14 and $weather < 20){
    echo "warm weather";
}elseif($weather >= 20 and $weather < 30){
    echo "hot weather";
}else{
    echo "very hot weather";
}

// switch
// $color = 'other';
// switch($color){   
//     case 'red':
//         echo 'red';
//         break;
//     case 'black':
//         echo 'black';
//         break;
//     default:
//         echo 'other';
// }

//ternary operator
// (condition)?   true: false;
// $user = 'mai';
// $id = 5;
// $gender = 'm';
// echo(($gender == 'f')?  "female":"male");

$color = 'other';
$msg = (($color == 'red')? 'red':'other');
echo $msg;

// 1+2=3
// == value
// === value dt 0 '0'