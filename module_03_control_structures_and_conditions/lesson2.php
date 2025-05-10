<?php

// Тернарные операторы

$orderPrice = rand(1950, 2050);
echo "Стоимость заказа: $orderPrice" . PHP_EOL;

$deliveryPrice = $orderPrice >= 2000 ? 0 : 300;
$resultSum = $orderPrice + $deliveryPrice;

echo "Стоимость доставки: $deliveryPrice. Общая стоимость: $resultSum" . PHP_EOL;

$userName = '';

echo $userName ?: 'Имя не указано';
echo PHP_EOL;