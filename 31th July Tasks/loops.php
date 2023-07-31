<?php

// 1
$range = 30;
$ans = $range * ($range + 1) / 2;

echo $ans;

echo "<hr>";


// 2
for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= 5; $j++) {
        if($i == $j) {
            echo $i;
        }
        else {
            echo "0";
        }
    }
    echo "<br>";
}

echo "<hr>";

// 3
$num = 5;
$ans = 1;

for($i = $num; $i > 0; $i--) {
    $ans*=$i;
}

echo $ans;

echo "<hr>";

// 4

$arr = [];
$range = 10;
for ($i = 0; $i <= $range; $i++) {
    if ($i == 0 || $i == 1) {
        echo $i;
        echo ",";
        array_push($arr, $i);
    } else {
        $newValue = $arr[$i - 1] + $arr[$i - 2];
        echo $newValue;
        if($i != $range) {
            echo ",";
        }
        array_push($arr, $newValue);
    }
}

echo "<hr>";

// 5

$n = 5; // Replace '5' with the number of lines you want to display
$num = 1;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }
    echo "<br>";
}

