<?php

// Exercise 1

$numberOfArrayKeys = 10;

for ($i = 0; $i < $numberOfArrayKeys; $i++){
    $simpleArray[$i] = rand(-5, 5);
}

var_dump($simpleArray);

$userNumber = readline("Input the number: ");

$doneNumberKey = array_search($userNumber, $simpleArray);

if ($doneNumberKey){
    $valueOfDoneNumberKey = $simpleArray[$doneNumberKey];
    echo "Your done number key = " . $doneNumberKey . " and value of this key = " . $valueOfDoneNumberKey;
} else {
    echo "You miss";
}



// Exercise 2

$arrayLength = 1;

for ($i = 0; $i < $arrayLength; $i++){
    $userArray[$i] = readline("Input " . $arrayLength . " numbers. Now you entering of " . ($i + 1) . " number: ");
}

$sumOfOdds = 0;
$numberOfOdds = 0;

foreach ($userArray as $keyIndex => $keyValue){
    if ($keyIndex % 2 != 0){
        $sumOfOdds += $keyValue;
        $numberOfOdds++;
    }
}

if ($numberOfOdds){
    echo $averageOfOddNumbers = $sumOfOdds / $numberOfOdds;
} else {
    echo '$numberOfOdds = 0';
}


// Exercise 3

$array = [1, 5, 8, 9, -10, 12];

$numberOfMoreThenSeven = 0;

foreach ($array as $keyIndex => &$keyValue){
    if ($keyValue > 7){
        $keyValue = 7;
    }
}

var_dump($array);


// Exercise 4

$simpleArray = [1, 2, 3, 4];
$mirrorArray = [];
$arrayLength = count($simpleArray); // is 4


foreach ($simpleArray as $keyValue){
    $mirrorArray[$arrayLength] = $keyValue;
    $arrayLength = $arrayLength - 1;
}

var_dump($mirrorArray);


// Exercise 5

$notSimpleArray = [];
$evenAndNegativeArray = [];
$arrayLength = 4;


for ($i = 0; $i < $arrayLength; $i++){
    $notSimpleArray[$i] = readline("Input number: ");
}

foreach ($notSimpleArray as $keyValue){
    if ($keyValue < 0 && ($keyValue % 2 == 0)){
        array_push($evenAndNegativeArray, $keyValue);
    }
}

$lengthOfEvenAndNegativeArray = count($evenAndNegativeArray);

var_dump($evenAndNegativeArray);

$arraySums = [];

for ($i = 0; $i < $lengthOfEvenAndNegativeArray; $i++){
    for ($j = 0; $j < $lengthOfEvenAndNegativeArray; $j++){
        if ($i < $j){
            array_push($arraySums, ($evenAndNegativeArray[$i] + $evenAndNegativeArray[$j]));
        }
    }
}

var_dump($arraySums);

// Exercise 6

$array = [2, 8, 101, -20, 101, 2, -5];



foreach ($array as $keyValue){
    if $keyValue <
}
