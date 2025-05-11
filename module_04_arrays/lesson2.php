<?php

// Ассоциативные массивы

$car = [
    'name' => 'Грузовик',
    'engine' => 'Дизель',
    'year' => '2019',
];
var_dump($car);

$car['color'] = 'Белый';

echo "{$car['color']} {$car['name']} выпушен в {$car['year']} году" . PHP_EOL;
