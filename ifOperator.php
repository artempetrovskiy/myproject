<?php

$valueFromForm = $_POST['variable'];
$secondValueFromForm = $_POST['secondVariable'];
$switchScenario = $_POST['switchScenario'];

$min = $valueFromForm;
$month = $valueFromForm;

switch ($switchScenario) {

    case 1:
        if ($valueFromForm == 'test') {
        echo "<br/> Переменная равна '$valueFromForm' - Всё Верно";
        } else {
            echo "<br/> Переменная НЕ равна 'test' - Всё Пропало";
        };
        break;

    case 2:
        if ($valueFromForm == 0 || $valueFromForm == 2) {
            var_dump($valueFromForm + 7);
        } else {
            var_dump($valueFromForm / 10);
        };
        break;

    case 3:
        if (($valueFromForm > 2 && $valueFromForm < 11) || ($secondValueFromForm >= 6 && $secondValueFromForm < 14)) {
            echo 'Верно';
        } else {
            echo 'НЕ Верно';
        };
        break;

    case 4:
        if ($min >= 1 && $min <= 15) {
            echo 'Ща где то начало часа';
        } else if ($min >= 16 && $min <= 30) {
            echo 'Ща где то до половины часа';
        } else if ($min >= 31 && $min <= 45) {
            echo 'Ща где то до без четверти';
        } else if ($min >= 46 && $min <= 59) {
            echo 'Може де то без пяти без десяти';
        };
        break;

    case 5:
        if ($month == 1 || $month == 12 || $month == 2) {
            echo 'Ща зима';
        } else if ($month == 3 || $month == 4 || $month == 5) {
            echo 'Ща весна - пора любви';
        } else if ($month == 6 || $month == 7 || $month == 8) {
            echo 'Ща лето - го в Кирилловку';
        } else if ($month == 9 || $month == 10 || $month == 11) {
            echo 'Ща осень - пора депрессий';
        };
        break;
};






















