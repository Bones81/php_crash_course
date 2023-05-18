<?php

/* ---- FILE HANDLING ---- */
/*
File handling is the ability to read and write files on the server. PHP has built in functions for reading and writing files.
*/

$file = 'extras/users.txt'; // file path

if(file_exists($file)) {
    // echo readfile($file); // not ideal because it also displays the numbers of bytes (or possibly characters) in the file

    $handle = fopen($file, 'r'); // open file to create data stream
    $contents = fread($handle, filesize($file)); // read and store the data from the stream, passing in the number of bytes of the file with filesize($file)
    fclose($handle); // close the file data stream
    echo $contents; // print out the file's contents
} else {
    $handle = fopen($file, 'w');
    $contents = 'Brad' . PHP_EOL . 'Nate' . PHP_EOL . 'Sujan';
    fwrite($handle, $contents);
    fclose($handle);
}