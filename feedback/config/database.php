<?php 
    /*
    In PHP, there are two main database API usage options: PDO and MySQL-I. PDO can work with many (up to 12) different SQL database types, including PostgreSQL, etc. MySQL-I only works with MySQL.
    */

    define('DB_HOST', 'localhost');
    define('DB_USER', 'nathan');
    define('DB_PASS', 'admin');
    define('DB_NAME', 'php_dev');

    // Create connection

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check connection

    if($conn->connect_error) {
        die('Connection failed' . $conn->connect_error);
    }

    // echo 'CONNECTED'; // use this to test whether DB connected