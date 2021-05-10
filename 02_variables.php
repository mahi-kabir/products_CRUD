<?php

// What is a variable

// Variable types

// Declare variables

$name = "mahi";  //
$age = 28;  //integer
$isMale = true; //bool
$height = 1.85; //float


// Print the variables. Explain what is concatenation
echo $name ."<br>";
echo $age ."<br>";  
echo $isMale ."<br>";   //false is converted into empty string..
echo $height = 1.85 ."<br>";

// Print types of the variables

echo gettype($name) ."<br>";
echo gettype($age) ."<br>";
echo gettype($height) ."<br>";
 

// Print the whole variable
var_dump($name);


// Change the value of the variable
$name = false;


// Print type of the variable
echo gettype($name) ."<br>";


// Variable checking functions
 is_String($name) ."<br>";  //false


 // Check if variable is defined
    echo isset($age) ."<br>";  //true
    echo isset($address) .'<br>'; //false


// Constants
define('Mahi', 80.52);
echo Mahi.'<br>';  //printing constant

// Using PHP built-in constants
echo SORT_ASC. '<br>';
echo PHP_INT_MAX. '<br>';