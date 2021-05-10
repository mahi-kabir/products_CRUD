<?php

// Function which prints "Hello I am Zura"
// function Hello(){
//     echo "Hello I am Asha";
// }

// Hello();


// Function with argument
    function Hello($name, $age){
        //echo "Hello I am $name and my age is $age <br>";
        return "Hello I am $name and my age is $age";
    }

    echo Hello("Mahi",26) . '<br>';
    
    echo Hello("Sumon",27). '<br>';


// Create sum of two functions
    // $nums = [1,2,3,4];
    // $num = 0;

    // for($i=0; $i<count($nums); $i++){
    //     $element = $nums[$i];
    //     $num = $num+$element;
        
    // }

    // echo $num . '<br>';


    // function sum(...$nums){
    //     $num = 0;
    //     foreach($nums as $n){
    //         $num  += $n;
    //     }
    //     return $num;    
    // }
    // echo sum(1,2,3,4). '<br>';


// Create function to sum all numbers using ...$nums
//   function products(...$names){   //take out the arguments and save in nums as an array
//     echo '<pre>';
//     var_dump($names);
//     echo'</pre>';
//   }
//   echo products(1,2,5,6,3,4);


// Arrow functions

function task(...$tasks){
    return array_reduce($tasks, fn($carry, $x) => $carry + $x);
}

echo task(2,3,1,2);

