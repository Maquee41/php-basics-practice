<?php

// Простые числовые массивы

$emptyArray = [];
var_dump($emptyArray);

$pets = ['кот', 'собака', 'птичка'];
var_dump($pets);

echo $pets[0] . PHP_EOL;

$pets[0] = 'рыбка';
var_dump($pets);

unset($pets[0]);
var_dump($pets);

// Кастомные индексы

$keyboardsKeys = [
    27 => 'Esc',
    13 => 'Enter',
    32 => 'Space',
];
var_dump($keyboardsKeys);

$otherKeysArray = [
    3 => 'first',
    'second',
    'third'
];
var_dump($otherKeysArray);
