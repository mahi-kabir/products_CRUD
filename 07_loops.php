<?php

// while
    $num = 0;
    while($num<0){
       
        echo $num . '<br>';
        $num++;
    }
// Loop with $counter

// do - while
// do{
//     echo $num . '<br>';
//     $num++;
// } while($num<10);
// for

// foreach
$fruits = ['banana','apple', 'orange'];
foreach($fruits as $i => $fruit){
    echo $i.' '.$fruit. '<br>';
}


// Iterate Over associative array.
$person = [
    'firstName'=>'Ajwad',
    'hobbies'=>['a','b','c','d'],
    'lastName'=>'Mahi',
    'age' => '26',
    
];

foreach($person as $key => $value){
    if (is_array($value)){
        echo $key .' '. implode("," , $value). '<br>';
    } else{
        echo $key .' '.$value. '<br>';
    }

}

