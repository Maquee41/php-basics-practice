<?php

// Числа и операции с числами

$firstInteger = 2;
$secondInteger = 10;
$thirdInteger = 7;

$firstFloat = 2.2;
$secondFloat = 10.1;

// PHP_EOL = "\n" (символ новой строки)

echo 'Сложение: ' . $firstInteger . ' + ' . $secondInteger . " = " . $firstInteger + $secondInteger . PHP_EOL;
echo 'Вычитание: ' . $firstInteger . ' - ' . $secondInteger . " = " . $firstInteger - $secondInteger . PHP_EOL;
echo 'Вычитание: ' . $firstInteger . ' * ' . $secondInteger . " = " . $firstInteger * $secondInteger . PHP_EOL;
echo 'Вычитание: ' . $firstInteger . ' / ' . $secondInteger . " = " . $firstInteger / $secondInteger . PHP_EOL;

echo 'Остаток от деления ' . $thirdInteger . ' на ' . $firstInteger . ' = ' . $thirdInteger % $firstInteger . PHP_EOL;

$firstInteger += 2.2;
echo $firstInteger . PHP_EOL;

// Унарные операции

$number = 5;

echo -$number . PHP_EOL; // -5

$number1 = 10;
$number2 = 5;

echo $number1++ . PHP_EOL; // 10
echo $number1 . PHP_EOL;   // 11

echo $number2-- . PHP_EOL; // 5
echo $number2 . PHP_EOL;   // 4

$number1 = 10;
$number2 = 5;

echo ++$number1 . PHP_EOL; // 11
echo $number1 . PHP_EOL;   // 11

echo --$number2 . PHP_EOL; // 4
echo $number2 . PHP_EOL;   // 4


// сравнение

$number = 10;

var_dump($number > 10);   // false
var_dump($number < 10);   // false
var_dump($number <= 10);  // true
var_dump($number >= 10);  // true
var_dump($number == 10);  // true
var_dump($number === 10); // true
var_dump($number != 10);  // false
var_dump($number !== 10); // false

var_dump($number == '10');  // true
var_dump($number === '10'); // false

var_dump($number <=> 10); // 0
var_dump($number <=> 5);  // 1
var_dump($number <=> 15); // -1
