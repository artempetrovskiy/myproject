<?php

// Exercise 1

/**
 * @param $arg
 * @return int
 */
function getPlus10($arg)
{
    $res = $arg + 10;
    echo $res . "\n";
    return $res;
}

getPlus10(10);
getPlus10(true);
getPlus10(-10);
getPlus10(false);
getPlus10(0.00001);
getPlus10(null);


// Exercise 2

$myArr = ["first" => 45, "second" => 76, "third" => 12,];

/**
 * @param $arr
 * @return array
 */
function putArrayKeys($arr): array
{
    $keyArray = [];
    foreach ($arr as $arrKey => $keyValue){
        array_push($keyArray, $arrKey);
    }
    var_dump($keyArray);
    return $keyArray;
}

putArrayKeys($myArr = ["first" => 45, "second" => 76, "third" => 12,]);
putArrayKeys(["first" => 45, "second" => 76,]);
putArrayKeys($myArr = []);


// Exercise 3

$lang = "en";
$day = 4;


/**
 * @param $lang
 * @param $day
 */
function showDay($lang, $day): void
{
    $arrLangAndDays = ["en" => ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday",],
                       "ru" => ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье",],
                      ];

    if ($lang == "en"){
        $arrayOfDays = $arrLangAndDays["en"];
    } else if ($lang == "ru") {
        $arrayOfDays = $arrLangAndDays["ru"];
    } else {
        echo "You write wrong language \n";
        $arrayOfDays = [];
    }

    if ($day < 1 || $day > 7){
        echo "You write wrong day number \n";
    } else {
        foreach ($arrayOfDays as $numberOfDay => $dayName){
            if (($day - 1) == $numberOfDay){
                echo "The name of the " . $day . " day in " . $lang . " language is " . $dayName . "\n";
            }
        }
    }
}

showDay("ru", 2); // The name of the 2 day in ru language is Вторник
showDay("en", 1); // The name of the 1 day in en language is Sunday
showDay("n", 1);  // You write wrong language
showDay("en", 8); // You write wrong day number


// Exercise 4

$arrOfEvenOrOddNumbers = [[-1, 2, 5, 100, -20, -50], [1, -2, 5, -100, -20,], [1, -50], [], "simpleString"];

var_dump(array_values($arrOfEvenOrOddNumbers));

foreach ($arrOfEvenOrOddNumbers as $keyNumber => $arrayOfNumbers) {
    if (is_array($arrayOfNumbers)){
        foreach ($arrayOfNumbers as $key => $number){
            if ($number < 0){
                echo "Odd number was founded. Key of array is " . $keyNumber . " and key of sub array is " . $key . " " . "\n";
            }
        }
    }
}


// Exercise 5

$n = readline("Input even natural number biggest of 3: ");
$arrayLength = $n ** 2;
$arrayOfRandomNumbers = [];
$arrayOfEvenRandomNumbers = [];

for ($i = 0; $i < $arrayLength; $i++){
    array_push($arrayOfRandomNumbers, rand(0, $n));
}

foreach ($arrayOfRandomNumbers as $val){
    if ($val %2 == 0){
        array_push($arrayOfEvenRandomNumbers, $val);
    }
}


// Exercise 6

$numberOfStudents = 15;

$arrayOfNumbers = [["2x2", "2x3", "2x4", "2x5", "2x6", "2x7", "2x8", "2x9",],
                   ["3x2", "3x3", "3x4", "3x5", "3x6", "3x7", "3x8", "3x9",],
                   ["4x2", "4x3", "4x4", "4x5", "4x6", "4x7", "4x8", "4x9",],
                   ["5x2", "5x3", "5x4", "5x5", "5x6", "5x7", "5x8", "5x9",],
                   ["6x2", "6x3", "6x4", "6x5", "6x6", "6x7", "6x8", "6x9",],
                   ["7x2", "7x3", "7x4", "7x5", "7x6", "7x7", "7x8", "7x9",],
                   ["8x2", "8x3", "8x4", "8x5", "8x6", "8x7", "8x8", "8x9",],
                   ["9x2", "9x3", "9x4", "9x5", "9x6", "9x7", "9x8", "9x9",],
                  ];

while ($numberOfStudents > 0){
    foreach ($arrayOfNumbers as $numberOfSubArray => &$subArray) {
        $randomIndex = rand(0, 7);
        if (isset($subArray[$randomIndex])){
            echo "For student number " . $numberOfStudents . " is variant are " . $subArray[$randomIndex] . "\n";
            $numberOfStudents--;
            unset($subArray[$randomIndex]);
        }
    }
}
unset($subArray);

























