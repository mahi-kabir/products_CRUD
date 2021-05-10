<?php

$fruits = ['Berry', 'apple','orange', 'lemon', 'coconut'];
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// //to check if there is value at pos 3 
// isset($fruits[3]); //true
// isset($fruits[4]); //false


//append element

// $fruits[] = 'Bangi';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// //add element
// array_push($fruits, 'Lemon');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// //remove element
// echo array_pop($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

//adding element at the beginning
// array_unshift($fruits, 'Watermelon');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

//removing element from the beginning
array_shift($fruits);

//split string into aray
$string = 'asus, msi, gigabyte';
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

//combine strings to array

echo '<pre>';
var_dump(implode("&", $fruits));
echo '</pre>';

//check existence of an element
echo '<pre>';
var_dump(in_array('bangi',$fruits));
var_dump(in_array('orange',$fruits));
echo '</pre>';

//finding an element
array_search('mango', $fruits); //false


//merging two arrays
$foods = ['rice','curry'];
echo '<pre>';
var_dump(array_merge($fruits, $foods));
var_dump([...$fruits,...$foods]);  //spread operator
echo '</pre>';

//sort
rsort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

?>


//https://www.php.net/manual/en/ref.array.php

