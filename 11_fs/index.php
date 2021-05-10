<?php
// Magic constants
echo __DIR__ .'<br>';
echo __FILE__.'<br>';
echo __LINE__.'<br>';


// Create directory
    //mkdir('php');

// Rename directory
    //rename('php', 'asp');


// Delete directory
    //rmdir('asp');


// Read files and folders inside directory
   $files = scandir('./');  //.means current directory  ..means parent directory
   echo '<pre>';
   var_dump($files);
   echo '</pre>';


// file_get_contents, file_put_contents
    echo file_get_contents('lorem.txt');
    file_put_contents('sample.txt', 'lorem ipsum dolor sit amet');


// file_get_contents from URL
    // $users = file_get_contents('https://jsonplaceholder.typicode.com/users');
    // //echo $users;

    // $usersInArray = json_decode($users, true);  //converts associative array into objects
    // //echo $usersInArray;
    // echo'<pre>';
    // var_dump($usersInArray);
    // echo'</pre>';

    file_exists('sample.txt');  //true 
    is_dir('abcd'); //false
// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file