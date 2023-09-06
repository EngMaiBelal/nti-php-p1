<?php

// Numeric Math
//( round(), ceil(), floor(), rand(), sqrt(), min(), max() , pow(), abs() )

// round(), ceil(), floor()
$cost = 5.9;
// echo round($cost); //6
// echo floor($cost); //5
// echo ceil($cost); //6

// rand()
// $code = rand(10000, 99999);
// echo $code;

// ----------------------------------------------------------------------------------------------
// Arrays 
// array_column, array_combine, array_intersect, array_intersect_key, array_intersect_assoc,
// array_diff, array_diff_key, array_diff_assoc, array_sum, $array_values, $array_keys, 
// array_sort, array_rsort, array_ksort, array_krsort, array_asort, array_arsort )

// Example 1
$users = array(
    array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
    ),
    array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
    )
);

// print_r( array_column($users, 'id'));

// $age=array("35","37","43");
// $fname=array("Peter","Ben","Joe");

// $c=array_combine($age, $fname);

// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"orange");

// $result=array_intersect_assoc($a1,$a2); //key, value
// print_r($result);

// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("e"=>"red","f"=>"green","g"=>"blue");

// $result=array_intersect($a2,$a1) //value
// print_r($result);


// $a1=array("a"=>"red","b"=>"green","c"=>"blue");
// $a2=array("a"=>"red","c"=>"black","d"=>"pink");

// $result=array_intersect_key($a1,$a2);
// print_r($result);

// $a=array(5,15,25);
// echo array_sum($a);
// $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
// print_r(array_values($a));
// echo "<br>";
// print_r(array_keys($a));

// ----------------------------------------------------------------------------------------------
// in_array( true false) , array_search (value , false)

// $allowedExtension = ['pdf', 'docx'];

// $uploadedExtension = "pdf";

// if (in_array($uploadedExtension, $allowedExtension)) {
//     echo "correct file";
// } else {
//     echo "wrong file";
// }

// ----------------------------------------------------------------------------------------------
// arrays ( array_filter )
// Example 2
$users = array(
    array(
        'id' => 5698,
        'email' => 'mai@gmail.com',
        'password' => '123456',
        'gender' => 'f'
    ),
    array(
        'id' => 4767,
        'email' => 'ahmed@gmail.com',
        'password' => '123456',
        'gender' => 'm'
    ),
    array(
        'id' => 3809,
        'email' => 'esraa@gmail.com',
        'password' => '123456',
        'gender' => 'f'
    )
);

// as correct email, pass 
// $email = 'mai@gmail.com';
// $password = 123456;

// function login($user){
    // global $email, $password;
//     return ($user['email'] == $email AND $user['password']== $password);
// }
// $userAuth = array_filter($users, "login");

// use --> callback fun
// $userAuth = array_filter($users, function($user) use ($email, $password){
//     return ($user['email'] == $email AND $user['password']== $password);
// });

// print_r($userAuth);


// filter all user are females
// $femaleUsers= array_filter($users, function($user){
//     return $user['gender'] == 'm'; //true, false
// });
// print_r($femaleUsers);
// die;


// $a1 = array(1, 3, 2, 3, 4);

// $result = (array_filter($a1, function ($var) {
//     return ($var < 3); //true, false
// }));

//$result = (array_filter($a1, "test"));
// function test($var){
// return ($var <2);
// }

// print_r($result);

// callback fun

// ------------------------------------------------------------------------------------------
// Date(format, timestamp=time()), dateFormat ('d-m-Y') ('H:i:s') ('h:i:s A') ('d-m-Y h:i:s A'), set date, get date
// $date = date('d-m-Y');
// $time = date('H:i:s');
// $dateTime =date('d-m-Y H:i:s');

// $time = date('h:i:s a');
// echo $time;
// 9-5-2023
// 24
// 12:00 am, pm
// date_default_timezone_set('Africa/Cairo');
// echo date_default_timezone_get();
echo time();

// ------------------------------------------------------------------------------------------
// Strings
// explode, crypt, echo, htmlspecialchars(),implode(), join(),lcfirst(), ltrim(), md5(), print(), rtrim(), sha1() ,..... 


// password
// hashing one way
// encryption two way
// $string = "hello";
// md5($string);  // static not secure
// sha1($string);
// crypt($string);

// $string = "123456";
// echo md5($string);
// echo "<br>";
// echo sha1($string);
// echo "<br>";
// echo crypt($string); //encryption
// echo "<br>";

// echo md5($string);
// echo "<br>";
// echo sha1($string);
// echo "<br>";
// echo crypt($string);
// echo "<br>";