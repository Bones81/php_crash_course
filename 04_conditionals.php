<?php
$age = 20;
// if($age >= 18) {
//     echo "You're old enough to vote.";
// } else {
//     echo "Sorry, you're not old enough to vote.";
// }

$t = date("H");

// if($t < 12) {
//     echo "Good morning!";
// } elseif ($t < 17) {
//     echo "Good afternoon!";
// } else {
//     echo "Good evening!";
// }

// echo $t . "\n";

$posts = ['First post'];

// if(!empty($posts)) {
//     echo 123;
// } else {
//     echo "No posts!";
// }

// $firstPost = !empty($posts) ? $posts[0] : "No Posts";

$firstPost = $posts[0] ?? null;

// echo $firstPost;

$favColor = "yellow";

switch($favColor) {
    case 'red':
        echo "Your favorite color is red";
        break;
    case 'blue':
        echo "Your favorite color is blue";
        break;
    case 'green':
        echo "Your favorite color is green";
        break;
    default:
        echo "Your favorite color is not red, green, or blue";
}