<?php

$valueOfFirstVariable = $_POST['firstVariable'];
$valueOfSecondVariable = $_POST['secondVariable'];
$valueOfThirdVariable = $_POST['thirdVariable'];
$valueOfFourthVariable = $_POST['fourthVariable'];
$valueOfFifthVariable = $_POST['fifthVariable'];
$chooseScenario = $_POST['chooseScenario'];

$min = $valueOfFirstVariable;
$month = $valueOfFirstVariable;

switch ($chooseScenario) {

    case 1:
        if ($valueOfFirstVariable == 'test') {
        echo "<br/> Переменная равна '$valueOfFirstVariable' - Всё Верно";
        } else {
            echo "<br/> Переменная НЕ равна 'test' - Всё Пропало";
        };
        break;

    case 2:
        if ($valueOfFirstVariable == 0 || $valueOfFirstVariable == 2) {
            var_dump($valueOfFirstVariable + 7);
        } else {
            var_dump($valueOfFirstVariable / 10);
        };
        break;

    case 3:
        if (($valueOfFirstVariable > 2 && $valueOfFirstVariable < 11) || ($valueOfSecondVariable >= 6 && $valueOfSecondVariable < 14)) {
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

    case 6:
        $average = ($valueOfFirstVariable + $valueOfSecondVariable + $valueOfThirdVariable + $valueOfFourthVariable + $valueOfFifthVariable) / 5;

        if ($average < 30) {
            echo 'Выгнать засранца';
        } else if ($average < 60) {
            echo 'Не зачёт';
        } else if ($average < 74) {
            echo 'Удовлетворительно';
        } else if ($average < 89) {
            echo 'Нормас - в принципе больше не надо';
        } else {
            echo 'Отлично';
        };
        break;

    case 7:
        $scoreEngland = $valueOfFirstVariable; // 5
        $scoreBelgium = $valueOfSecondVariable; // 2
        $bet = $valueOfThirdVariable; // 100

        $kEngland = 1.5;
        $kBelgium = 1.5;

        if ($scoreEngland == 0 && $scoreBelgium == 0) {
            $kSumm = ($kEngland + $kBelgium) / 2;
            $gain = $bet * $kSumm;
            echo 'Не важно на кого вы ставили, но выиграли ' . $gain . ' евриков!!!';
        } else {
            $kSummEngland = $kEngland + ($scoreEngland * 1.5);
            $kSummBelgium = $kBelgium + ($scoreBelgium * 2.5);
            $gainEngland = $bet * $kSummEngland; // Ставили на Англию
            $gainBelgium = $bet * $kSummBelgium; // Ставили на Бельгию
            echo 'Если вы ставили на Англию то выиграли ' . $gainEngland . ' евриков!!! Если на Бельгию, то ' . $gainBelgium . ' евриков!!!';
        }
        break;

    case 8:
        $userNumber = $valueOfFirstVariable;
        $minNumber = 1;
        $maxNumber = 11;
        $average = intval(($maxNumber + $minNumber) / 2);
        $i = 0;

        while ($userNumber != $average) {
            $average = intval(($maxNumber + $minNumber) / 2 );
            if ($userNumber <= $average) {
                $maxNumber = $average;
            } else if ($userNumber >= $average)
                $minNumber = $average;
            $i = $i + 1;
        }

        echo 'Ваше число = ' . $average . ' при количество итераций цикла = ' .  $i;
        break;

    case 9:
        if (($valueOfFirstVariable % 4 == 0) && ($valueOfFirstVariable % 100 != 0)) {
            echo 'Високосный';
        } else {
            echo 'Не високосный';
        };
        break;

    case 10:
        if ($valueOfFirstVariable % 2 == 0) {
            echo 'Чет';
        } else {
            echo 'Нечет';
        };

        if (strlen($valueOfFirstVariable) == 1) {
            echo ' и однозначное';
        } else if (strlen($valueOfFirstVariable) == 2) {
            echo ' и двухзначное';
        } else {
            echo ' и трехзначное';
        };
        break;

    case 11:
        $firstFactor = $valueOfFirstVariable;
        $secondFactor = $valueOfSecondVariable;
        $multiplication = $valueOfThirdVariable;

        if ($multiplication == $firstFactor * $secondFactor) {
            echo 'Верно!';
        } else {
            echo 'Не верно! В действительности будет равно ' . $firstFactor * $secondFactor;
        }
        break;

    case 12:
        $x = $valueOfFirstVariable;
        $y = $valueOfSecondVariable;

        if (($x > 0) && ($y > 0)) {
            echo 'Это первая четверть';
        }
        if (($x < 0) && ($y > 0)) {
            echo 'Это вторая четверть';
        }
        if (($x < 0) && ($y < 0)) {
            echo 'Это третья четверть';
        }
        if (($x > 0) && ($y < 0)) {
            echo 'Это четвертая четверть';
        }
        break;

    case 13:
        if ($valueOfThirdVariable == '+') {
            echo $valueOfFirstVariable + $valueOfSecondVariable;
        }
        if ($valueOfThirdVariable == '-') {
            echo $valueOfFirstVariable - $valueOfSecondVariable;
        }
        if ($valueOfThirdVariable == '*') {
            echo $valueOfFirstVariable * $valueOfSecondVariable;
        }
        if ($valueOfThirdVariable == '/') {
            echo $valueOfFirstVariable / $valueOfSecondVariable;
        }
        break;

    case 14:
        $a = $valueOfFirstVariable;
        $radius = $valueOfSecondVariable;

        $gippotenuse = pow(($a ** 2 + $a ** 2), 0.5);
        $diameter = 2 * $radius;

        if ($gippotenuse <= $diameter) {
            echo "Можно вписать квадрат со стороной $a в окружность с радиусом $radius";
        } else {
            echo 'Это сделать низзя';
        };
        break;

    case 15:
        $a = $valueOfFirstVariable;
        $square = $valueOfSecondVariable;

        if ($square == $a ** 2) {
            echo 'Точняк, это квадрат!';
        } else {
            echo 'Это не квадрат';
        };
        break;

    case 16:
        $a = $valueOfFirstVariable;
        $b = $valueOfSecondVariable;
        $c = $valueOfThirdVariable;
        $d = $valueOfFourthVariable;

        if (($a == $b) && ($b == $c) && ($c == $d)) {
            echo 'Можно из этого слепить квадрат или ромб';
        } else if (($a == $b) && ($c == $d) && ($a != $c) ||
                   ($a == $d) && ($b == $c) && ($a != $b)
        ) {
            echo 'Это парраллелепипед что бы это, чёрт возьми, не означало';
        } else {
            echo 'Это шото непонятное, но явно четырёхугольное';
        };
        break;
};
