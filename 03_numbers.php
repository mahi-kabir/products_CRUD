<?php

// Declaring numbers
$a=6; $b=5; $c=7;

// Arithmetic operations


// Assignment with math operators

//echo $a = $a + $b . "<br>";
//echo $a += $b;

// Increment operator
echo $a++ . "<br>";  //taken and printed then increased by 1
echo $a . "<br>"; 
echo ++$a."<br>";

// Decrement operator
echo $a-- . "<br>";  //taken and printed then increased by 1
echo $a . "<br>"; 
echo --$a."<br>";


// Number checking functions
    // is_float(12.34)
    // is_double
    // is_int
    // is_numeric


// Conversion
    //string to numbers
    $strNumber = '50.23';
    $numberToString = (float)$strNumber;
    var_dump($numberToString) .'<br>';
// Number functions

echo 'abs(-52)'. abs(-52).'<br>';
echo 'round(4.76)'. round(4.76).'<br>';
echo 'floor(4.76)'. floor(4.76).'<br>';


// Formatting numbers

$number = 45689973.32047;
 echo number_format($number, 3, ".", ", ");


// https://www.php.net/manual/en/ref.math.php
