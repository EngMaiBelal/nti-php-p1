<?php 
// int, float, boolean, null, array, object, string
// Array --> container 
// $arr = [1,2,6];
// $arr = array(1,2);

// array types
//1- IndexedArray
// $arr = [1, 2.5, null, true, [], (object)[]];
// echo $arr[3];
// len = 6
//index 0-->5

// len = lastIndex + 1
// lastIndex = len -1

//ex
// $array = ['ahmed', 'mohamed', 'esraa', 'mai'];
// $len = count($array);
// echo $len;
// $lastIndex = $len -1;
// echo $lastIndex;
//get value
// echo $array[1];

//set value
// $array[4]='basma';

//edit value
// $array[0]='aya';

// $array[8]='mona';
// $array[7]='ali';
// $array[-1]= 'omar';
// $array[-2]= 'sara';

// print_r($array);
// echo $array[-1];
// php view install ext

// 2- AssociativeArray
// $associativeArr=[
//     'id'=> 5,
//     'name' => 'mohamed',
//     'gender' =>'m',
//     'name'=> 'osama'
// ];
//get val
// echo $associativeArr['gender'];
// set value
// $associativeArr['age'] = 30;
// print_r($associativeArr);

// edit arr
// $associativeArr['id'] = 6;
// echo $associativeArr['id'];
// print_r($associativeArr);

// //ex2 -->multidimensional array
// $user =[
//     'id'=> 6,
//     'name'=>'ahmed',
//     'activities'=> [
//         'football',
//         'reading',
//         'running'
//     ],
//     'orders'=>
//     [
//         ['name'=>'fff','date'=>'5/9/2023'],
//         ['name'=>'hhh','date'=>'1/9/2023']
//     ]
// ];
// $user['name'];
// echo $user['activities'][0];
// echo $user['orders'][0]['name'];
 

// object
$user = (object)[
        'id'=> 5,
        'name' => 'mohamed',
        'gender' =>'m'
    ];

// . ---> js   . -->concate
echo $user->gender;

?>