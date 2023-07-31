<?php

$year = '2023';

if(($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "This is a leap year";
}
else {
    echo "This is not a leap year";
}

echo '<hr>';

$temp = 20;
if($temp < 20) {
    echo "It's Winter";
}
else {
    echo "It is summertime";
}

echo '<hr>';

$num1 = 10;
$num2 = 10;

if($num1 == $num2) {
    $ans = ($num1 + $num2) * 3;
    echo $ans;
}
else {
    $ans = $num1 + $num2;
    echo $ans;
}

echo '<hr>';

$num1 = 10;
$num2 = 10;

if($num1 + $num2 == 30) {
    echo "True";
}
else {
    echo "False";
}

echo '<hr>';

$num = 20;

if($num % 3 == 0) {
    echo "Trur";
}
else {
    echo "Flase";
}

echo '<hr>';

$num = 50;
if($num >= 20 && $num <= 50) {
    echo "True";
}

echo "<hr>";

$nums = [1, 5, 9];
rsort($nums);
echo "$nums[0]";

echo '<hr>';

$units = 220;

switch($units) {
    case $units <= 50:
        echo "2.50 JOD/Unit";
        break;
    
    case $units > 50 && $units <= 150:
        echo "5.00 JOD/Unit";
        break;
    
    case $units > 150 && $units <= 250:
        echo "6.20 JOD/Unit";
        break;

    default:
        echo "7.50 JOD/Unit";
        break;
}

echo "<hr>";

$age = 15;

if($age < 18) {
    echo "Is no eligible to vote";
}

else {
    echo "Legal to vote";
}

echo "<hr>";

$num = -60;

if($num < 0) {
    echo "Negative";
}

else {
    echo "Positive";
}

echo "<hr>";

$operation = "*";
$num1 = 10;
$num2 = 20;
$ans;
switch($operation) {
    case "+":
        $ans = $num1 + $num2;
        break;
    
    case "-":
        $ans = $num1 - $num2;
        break;

    case "*":
        $ans = $num1 * $num2;
        break;

    case "/":
        $ans = $num1 / $num2;
}

echo $ans;

echo "<hr>";

$grades = array(60, 86, 95, 63, 55, 74, 79, 62, 50);

$sum = array_sum($grades);
$avg = $sum / count($grades);

switch($avg) {
    case $avg < 60:
        echo "F";
        break;
    
    case $avg < 70:
        echo "D";
        break;

    case $avg < 80:
        echo "C";
        break;

    case $avg < 90:
        echo "B";
        break;

    case $avg <= 100:
        echo "A";
        break;

    default:
        echo "Invalid Grade";
        break;
}

echo "<hr> <h1>The End</h1>";


