// What is class and instance
<?php 

require_once "Person.php";

$person1 = new Person('Mahi', 26);
echo $person1-> setSalary(500);

echo '<pre>';
var_dump($person1);
echo '</pre>';

echo $person1->getSalary();


$person2 = new Person('Sumon', 28);
$person2-> setSalary(600);
echo '<pre>';
var_dump($person2);
echo '</pre>';

echo $person2->getSalary(). '<br>';


echo Person::$counter . '<br>';  // 2 onj were created
echo Person:: getCounter() . '<br>';
// $man->name = "Mosh";
// $man -> surname = "Hamedani";
// echo $man->name;

// echo '<pre>';
// var_dump($man);
// echo '</pre>';


// Create Person class in Person.php

// Create instance of Person

// Using setter and getter
?>