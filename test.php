<?php

$stringWithDelimeters = '10.0, 20.55';

$result = explode( ", ", $stringWithDelimeters);

var_dump($result);

echo "\n";
echo "\n";
echo "\n";

$f1 = 'Apelsin';
$f2 = 'Ananas';

$f1_c = 2;
$f2_c = 10;

$f1_c = $f2_c;
$f1 = 'Ananas';

echo "\n";
echo "\n";
echo "\n";
echo '<br>';
echo 'Название первого фрукта: ' . $f1 . ' Цена первого фрукта: ' . $f1_c . '<br>';
echo 'Название второго фрукта: ' . $f2 . ' Цена второго фрукта: ' . $f2_c . '<br>';

echo __FILE__;
echo '<br>';
echo __DIR__;
echo '<br>';
var_dump(__CLASS__);

echo "Gert $f1";

$name = 'Artem';
$age = 35;
echo "Меня зовут $name".PHP_EOL;
echo 'Мне' . $age . 'лет';
unset($age);
















