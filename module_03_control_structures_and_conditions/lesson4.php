<?php

// Операторы выбора

// 1. Switch

$keyPressedId = rand(32, 40);
echo "Код символа: $keyPressedId" . PHP_EOL;

switch ($keyPressedId) {
    case 32:
        echo 'Space';
        break;
    case 33:
        echo 'Page Up';
        break;
    case 34:
        echo 'Page Down';
        break;
    case 35:
        echo 'End';
        break;
    case 36:
        echo 'Home';
        break;
    case 37:
        echo 'Left arrow';
        break;    
    case 38:
        echo 'Up arrow';
        break;
    case 39:
        echo 'Right arrow';
        break;
    case 40:
        echo 'Down arrow';
        break;
    default:
        echo 'Неизвестный код';
}

echo PHP_EOL;

$keyType = match ($keyPressedId) {
    37, 38, 39, 40 => 'Стрелки направлений',
    32 => 'Space',
    36 => 'Home',
    default => 'другая клавиша'
};

echo $keyType . PHP_EOL;
