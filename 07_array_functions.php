<?php
    $fruits = ['apple', 'orange', 'pear'];
    
    // get length
    // echo count($fruits);

    // Search array
    // var_dump(in_array('apple', $fruits));

    // Add to array
    // $fruits[] = 'grape';
    // array_push($fruits, 'blueberry', 'strawberry');
    // array_unshift($fruits, 'mango');

    // Remove from array
    // array_pop($fruits); // removes last
    // array_shift($fruits); // removes first
    // unset($fruits[2]); // removes value and index!

    // Split into chunks
    // $chunked_array = array_chunk($fruits, 2); // Splits into chunks with 2 elements each

    // print_r($fruits);

    // print_r($chunked_array);

    // $arr1 = [1,2,3];
    // $arr2 = [4,5,6];
    // $arr3 = array_merge($arr1, $arr2);
    // $arr4 = [...$arr1, ...$arr2];

    // print_r($arr4);

    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'apple', 'banana'];

    $c = array_combine($a, $b);

    // print_r($c);

    $keys = array_keys($c);

    // print_r($keys);

    $values = array_values($c);

    // print_r($values);

    // echo "<br>";

    $flipped = array_flip($c);

    // print_r($flipped);

    $numbers = range(1, 14);

    // print_r($numbers);

    $newNumbers = array_map(function($number) {
        return "Number $number <br>"; 
    }, $numbers);

    // print_r($newNumbers);

    $lessThan10 = array_filter($numbers, fn($num) => $num <= 10);

    // print_r($lessThan10);

    $sum = array_reduce($numbers, fn($carry, $num) => $carry + $num);

    var_dump($sum);
