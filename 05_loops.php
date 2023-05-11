<?php 
/* ---------------- For Loop ------------------------ */

// for ($x = 0; $x < 10; $x++) {
//     echo 'Number ' . $x . '<br>';
// }

/* ---------------- While Loop ---------------------- */

// $x = 1;

// while ($x <= 15) {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// }

/* ---------------- Do While Loop ------------------ */

// $x = 6;
// do {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while ($x <= 5);

/* ---------------- Foreach Loop ------------------ */

$posts = ['First post', 'Second post', 'Third post'];

// foreach($posts as $index => $post) {
//     echo $index . ' - ' . $post . "\n";
// }

$person = [
    'first_name' => 'Nathan',
    'last_name' => 'Freeman',
    'age' => 41
];

foreach($person as $key => $value) {
    echo "$key - $value<br>";
};

