<?php

// Create simple string
    // $string = "Hello World";
    // $string1 = 'Hello I am ' .$string.'. I am 26 <br>';
    // $string2 = "Hello I am  $string. I am 26 <br>" ;
    // echo  $string1;
    // echo $string2;


// String concatenation
    //echo 'Hello '.'There '.'and '. 'buddies <br>';


// String functions
    // echo substr($string,8) . "<br>";
    // echo str_ireplace('world', 'Buddies', $string). '<br>';
    // echo str_replace('World', 'Pals', $string). '<br>';


    // $color = 'red';
    // echo 'my book is '.$color.  ' this is my favorite book';

// Multiline text and line breaks
    $txt = "Hello I am <b>Mahi</b>,
        I like <b>travelling</b>. ,
        I also like to play <b>cricket</b>.
    ";

    echo "1 -". nl2br($txt). '<br>';
    echo "2 -". htmlentities($txt). '<br>';
    echo "3 -". nl2br(htmlentities($txt));

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php