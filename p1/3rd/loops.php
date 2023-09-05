<?php 

// echo 'hello';
// echo 'hello';
// echo 'hello';
// types of loop

// 1- for loop
// for(intial; condition; step){
//     //body
// }

// for($i=0 ; $i<=10 ; $i++){
//     echo 'ahmed <br>';
// }

// for($i=10; $i>=0 ; $i--){
//     echo "$i ahmed <br>";
// }

// forloop indexed array
// $color = ['red', 'black', 'blue'];
// echo $color[0];
// echo $color[1];
// echo $color[2];

// $lastIndex = count($color)-1;

// echo($lastIndex); //2
// for($i =0 ; $i<= $lastIndex; $i++){
//     echo $color[$i].'<br>';
// }
// 2- while

//intial
// while(condition = true){
//     // body
//     //step
// }

// 3- dowhile
//intial value
// do{
//     //body
//     //step
// }while(condition)
// $color = ['red', 'black', 'blue'];

// $counter = 0;
// do{
//     echo $color[$counter];
//     $counter--; //-1
// }while($counter >= 0);

// for while dowhile ---> indexed array
// foreach--->  associative array, object ,indexed
// foreach($container As $v1=>$v2){
//     //body
// }
// foreach($indexedArr As $index=>$value){
//     //body
// }
// foreach($associative As $key=>$value){
//     //body
// }
// foreach($object As $property=>$value){
//     //body
// }
// $color = ['red', 'black', 'blue'];
// foreach($color AS $index => $value){
//     echo $index.' -->  '.$value.'<br>';
// }

// $user = [
//     'id'=>5,
//     'name'=>'ali'
// ];

// foreach($user AS $key=>$value){
//     echo "$key ==> $value <br>";
// }

// break
// $user = (object)[
//     'id'=>5,
//     'name'=>'ali'
// ];

// foreach($user AS $property=>$value){
//     if( $property == 'name'){
//         break; //exit for loop
//     }else{

//         echo $property .' ,';
//     }
// }

// continue
// $color = ['red', 'black', 'blue', 'brown', 'orange'];

// foreach($color AS $index=> $value){
//     if($value == 'blue'){
//         continue;
//     }
//     echo "$value <br>";
// }

















?>