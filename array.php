<?php

$arr = ['Понедельник', 'Вторник', true, 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

//echo $arr[1];
//
//var_dump($arr);
//
//print_r($arr);
//
//$myString = "FooBar";
//
//$arrayOfMyString = str_split($myString);
//
//var_dump($arrayOfMyString);


//$newString = implode(", ", $arr);
//
//echo $newString . "\n";
//
//$newArray = explode(", ", $newString);
//
//print_r($newArray);
//
//
////list($a, $b, $c, $d, $e, $f, $g) = explode(", ", $newString);
//list($a, $b, $c, $d, $e, $f, $g) = $newArray;
//
//echo $d;
//
//
//echo rand() / rand();
//


//$assocArray = [
//    10,
//    15,
//    20,
//];
//
//unset($assocArray[1]);
//
//var_dump($assocArray);


//$arr = [1, 2, 3, 4, 5,];
//
//
//foreach ($arr as $value) {
//    echo $value . "\n";
//}
//
//echo "\n";
//
//foreach ($arr as &$value) {
//    $value = $value * 2;
//    echo $value . "\n";
//}
//
//var_dump($arr);
//
//unset($value);
//
//var_dump($arr);


$arr = [];

for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 10);
}

$number = readline("Input number: ");

if (array_search($number, $arr)) {
    echo "Done";
} else {
    echo "Fail";
}















