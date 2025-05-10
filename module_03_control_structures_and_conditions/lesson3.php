<?php

// Логическое НЕ (!) / отрицание

$isNight = false;

if (! $isNight) {
    echo 'Выключи свет' . PHP_EOL;
}

$isFirstTaskCompleted = true;
$isSecondTaskCompleted = true;
$isThirdTaskCompleted = false;

// Логическое И (&&)
// Логическое ИЛИ (||)
if ($isFirstTaskCompleted && $isSecondTaskCompleted || $isFirstTaskCompleted && $isThirdTaskCompleted) {
    echo "Вы успешно выполнили тестовое задание" . PHP_EOL;
}


$user1InChat = true;
$user2InChat = false;

// Исключающее ИЛИ (xor)
$canInvite = $user1InChat xor $user2InChat;

echo $canInvite . PHP_EOL;