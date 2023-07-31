<?php

$range = 30;
$ans = $range * ($range + 1) / 2;

echo $ans;

echo "<hr>";

// for($i = 1; $i <= 5; $i++) {
//     for($j = 5; $j >= 1; $j--) {

//     }
// }


for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= 5; $j++) {
        echo $j;
    }
    echo "<br>";
}