<?php

$colors = array('white', 'green', 'red');

echo "<ul>";
foreach($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";

echo "<hr>";

$cities = array
(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid"
);

foreach($cities as $key => $value) {
    echo "The capital of $key is $value";
    echo "<br>";
}

echo "<hr>";

$color = array 
(
    4 => 'white', 6 => 'green', 11=> 'red'
);

echo $color[4];

echo "<hr>";

$fruits = array
("
    d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"
);

krsort($fruits);

foreach ($fruits as $key => $value) {
    echo $key . " = " . $value . "<br>";
}

echo "<hr>";

$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$word_lengths = array_map('strlen', $words);

$shortest_length = min($word_lengths);
$longest_length = max($word_lengths);

echo "The shortest array length is $shortest_length. The longest array length is $longest_length.";