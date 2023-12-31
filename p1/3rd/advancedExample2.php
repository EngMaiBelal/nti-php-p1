<?php

$categories = [
    'Id' => 1,
    'name' => 'mobiles',
    'subCategories' => [
        'samsung' => [
            (object)[
                'id' => 50,
                'name' => 'NOTE 10',
                'prices' => [5000, 6000],
                'madeIn' => ['china', 'germany'],
                'colors' => ['primary' => 'black', 'secondaryColors' => ['red', 'blue']],
            ], (object)[
                'id' => 60,
                'name' => 'S20',
                'prices' => [7000, 8000],
                'madeIn' => ['china', 'germany'],
                'colors' => ['primary' => 'white', 'secondaryColors' => ['brown', 'orange']],
            ]
        ],
        'apple' => [
            (object)[
                'id' => 70,
                'name' => 'Iphone X',
                'prices' => 20000,
                'madeIn' => ['china'],
                'colors' => ['red', 'green', 'black'],
            ], (object)[
                'id' => 80,
                'name' => 'Iphone 12',
                'prices' => 60000,
                'madeIn' => [ 'germany'],
                'colors' => [
                    (object)['primary' => 'black'],
                    (object)[
                        'secondaryColors' =>
                                            [
                                                'red',
                                                'blue'
                                            ]
                    ]
                ],
            ]
        ],
        'oppo' => [
            (object)[
                'id' => 90,
                'name' => 'Oppo F1',
                'prices' => [],
                'madeIn' => [],
                'colors' => [],
            ], (object)[
                'id' => 100,
                'name' => 'Oppo F2',
                'prices' => [],
                'madeIn' => [],
                'colors' => [],
            ]
        ]
    ]
];
// example 2 
// Note 10 : china , germany
// s20 : china , germany
// iphonex : china ....

// example 1
// brand :samsung   => Note10,S20
// brand :apple     => iphone x , iphone 12
// brand :oppo      => Oppo F1 , Oppo F2

// nestedForeach
// multidimensional array 
foreach($categories['subCategories'] As $brand=>$products){
    echo "brand: $brand <br>";
    foreach($products AS $index => $product){
        echo $product->name . "<br>";
    }
}


