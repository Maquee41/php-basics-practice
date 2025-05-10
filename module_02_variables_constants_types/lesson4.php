<?php

// Строки

$user = 'Egor';
$userRu = 'Егор';

// Одинарные кавычки
$sentence1 = '$user выполнил вход в систему';
// Двойные кавычки
$sentence2 = "$user выполнил вход в систему";

echo $sentence1 . PHP_EOL;
echo $sentence2 . PHP_EOL;

$line = "Доброе утро";
$line .= ', ' . $user;

echo $line . PHP_EOL;

// длина строки в байтах
var_dump(strlen($user));
// кириллица
var_dump(strlen($userRu));
// длина строки для мультибайтовых строк
// функция mb_strlen недоступна из корубки
var_dump(mb_strlen($userRu));

// trim — Удаляет пробельные или другие символы в начале и конце строки
// ltrim — Удаляет пробельные или другие символы в начале строки
// rtrim — Удаляет пробельные или другие символы в конце строки
$lineWithWhiteSpaces = '   Строка   с   пробелами   ';

echo '"' . trim($lineWithWhiteSpaces) . '"' . PHP_EOL;
echo '"' . ltrim($lineWithWhiteSpaces) . '"' . PHP_EOL;
echo '"' . rtrim($lineWithWhiteSpaces) . '"' . PHP_EOL;

$url = '/page/';
echo trim($url, '/') . PHP_EOL;

// strpos|stripos
$sentence = 'This program on PHP';
echo 'Позиция подстроки: ' . strpos($sentence, 'PHP') . PHP_EOL;
echo 'Позиция подстроки: ' . strpos($sentence, 'php') . PHP_EOL;
echo 'Позиция подстроки: ' . stripos($sentence, 'php') . PHP_EOL;

// substr|mb_substr
echo substr('Hello World', 2) . PHP_EOL;
echo substr('Hello World', 2, 6) . PHP_EOL;
echo stripos('Привет Мир', 2) . PHP_EOL;
echo mb_substr('Привет Мир', 2) . PHP_EOL;

echo str_replace('не ', '', 'Я не умею программировать') . PHP_EOL;
