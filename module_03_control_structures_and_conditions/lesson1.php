<?php

// Условные конструкции

$userAge = rand(15, 20);
echo "Возраст пользователя: $userAge лет" . PHP_EOL;

if ($userAge >= 18) {
    echo 'Доступ открыт';
} else {
    echo 'Доступ закрыт';
}
echo PHP_EOL;

$waterValue = rand(0, 3);
echo "Показания с датчика уровня воды: $waterValue" . PHP_EOL;

if ($waterValue === 0) {
    echo 'Воды нет';
} elseif ($waterValue === 1) {
    echo 'Уровень воды ~50 %';
} elseif ($waterValue === 2) {
    echo 'Уровень воды ~100 %';
} else {
    echo 'Проверьте датчик';
}
echo PHP_EOL;
