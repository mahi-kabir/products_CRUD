<?php

$age = 20;
$name = 'mahi';
$salary = 2000;

// Sample if

// Without circle braces

// Sample if-else

// Difference between == and ===

// if AND

// if OR

// Ternary if
 echo $age>22 ? 'Young' : 'old'. '<br>';  //if age is less than 22, then print young


 // Short ternary
$mySalary = $salary?:20000;
echo $mySalary;

/*
creating a variable $mySalary, if $salary exists then $mySalary will be $salary otherwise $mySalary will be 20000 
*/


// Null coalescing operator
$mySalary = isset($salary) ? $salary : 40000;
$mySalary = $salary ?? 40000;
//both are same

// switch

$person = 'sumon';
switch($person){
    case 'sumon':
        echo 'sumon';
        break;
    
    case 'ansarul':
        echo 'sohan';
        break;
    
    
}