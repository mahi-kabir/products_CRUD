<?php

    $person = [
        'firstName'=>'Ajwad',
        'lastName'=>'Mahi',
        'age' => '26',
        'hobbies'=>['a','b','c','d']
    ];

    // echo '<pre>';
    //     //var_dump($person);
    //     print_r($person);
    // echo '</pre>';

   //set new values

    $person['address'] = 'Dhaka';
    echo '<pre>';
    var_dump($person);
   // print_r($person);
    echo '</pre>';

//null coalescing

// if(!isset($person['height'])){
//     $person['height'] = 'unknown';
// }

$person['height'] ??= 'unknown';
    echo '<pre>';
    var_dump($person);
   // print_r($person);
    echo '</pre>';


//print the keys of array
echo '<pre>';
var_dump(array_keys($person));
// print_r($person);
echo '</pre>';

//sorting aray by keys
ksort($person);
echo '<pre>';
var_dump($person);
// print_r($person);
echo '</pre>';

//sorting aray by values
asort($person);
echo '<pre>';
var_dump($person);
// print_r($person);
echo '</pre>';

//2d array 
$cars = [
    ['name' => 'Audi', 'color'=> 'Silver', 'isBought' => false],
    ['name' => 'BMW', 'color'=> 'Red', 'isBought' => false],
];


echo '<pre>';
var_dump($cars);
print_r($cars);
echo '</pre>';


?>