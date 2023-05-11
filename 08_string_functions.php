<?php
    $str = 'Hello World';

    echo strlen($str);

    echo strpos($str, 'o');

    echo strrpos($str, 'o');

    echo strrev($str);

    echo strtolower($str);

    echo strtoupper($str);

    echo ucwords($str);

    echo str_replace('World', 'Everyone', $str);

    echo substr($str, 0, 5);

    echo substr($str, 5);

    if (str_starts_with($str, 'Hello')) {
        echo 'YES';
    }

    if (str_ends_with($str, 'ld')) {
        echo 'YES';
    }

    $str2 = '<script>alert(1)</script>';

    echo htmlspecialchars($str2);
    echo htmlentities($str2);

    printf('%s likes to %s', 'Nathan', 'code');
    printf('1 + 1 = %f', 1+1);