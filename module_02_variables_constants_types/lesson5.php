<?php

// Константы

define('DAYS_IN_WEEK', 7);

const WEEKENDS_IN_WEEK = 2;

var_dump(DAYS_IN_WEEK, WEEKENDS_IN_WEEK);

var_dump(__FILE__); // выводит полный путь к этому файлу
var_dump(__DIR__);  // выводит полный путь к текущей директории
var_dump(__LINE__); // выводит номер строки в этом файле

var_dump(__FUNCTION__);  // выводит название текущей функции, если код внутри функции
var_dump(__NAMESPACE__); // выводит пространство имен этого файла
var_dump(__CLASS__);     // выводит имя текущего класса (для ООП)
var_dump(__METHOD__);    // выводит имя исполняемого метода объекта (для ООП)
