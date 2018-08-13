<?php

$n = $_POST['color']; // Ну короче сегодня цвет это фрукт

//switch ($fruit) {
//    case 'Апельсин';
//    case 'Мандарин';
//    case 'Киви':
//        echo 'Не иначе ка Новый год на носу';
//        break;
//    case 'Арбуз':
//    case 'Дыня':
//        echo 'Август месяц пока отпусков';
//        break;
//    case 'Банан':
//        echo 'Ну такое удовольствие';
//        break;
//    default:
//        echo 'Что за фрукт ты выбрал? Не знаю такого';
//}

//
//while ($a < 1000) {
//    $a++;
//    echo $a;
//    echo "\n";
//}

//for ($i = 0; ""; $i++) {
//    $a++;
//    echo $a;
//    echo "\n";
//}
//
//for ($i = 0; $i < 3; $i++){
//    echo "Внешний массив <br>";
//    for ($j = 0; $j < 5;  $j++) {
//        echo "Внутренний массив <br>";
//    }
//}
//
//for ($i = 0; $i < 10; $i++) {
//    echo "$i ";
//    if ($i % 2 == 0) {
//        continue;
//    }
//    echo "<br>";
//}

//if (true){
//    $i++;
//} elseif (true) {
//    $i++;
//}

$summ = 0;

for ($i = 1; $i <= $n; $i++) {
    $summ = $summ + 1 / $i;
}

echo $summ;












