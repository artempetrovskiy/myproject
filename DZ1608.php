<?php


// Exercise #1

$n = 1000;
$summ = 0;

for ($i = 1; $i <= $n; $i++) {
    $summ = $summ + 1 / $i;
}

echo $summ;


// Exercise #2

$number = 10;
$intermediateResult = 1;

for ($i = 1; $i < $number; $i++) {
    $intermediateResult = $intermediateResult * ($i + 1);
}

echo $intermediateResult;


// Exercise #3

for ($i = 1; $i < (10 + 1); $i++) {
    echo pow(2, $i);
    echo "\n";
}


// Exercise #4

$maxNumber = 1000;

for ($i = 1; $i < $maxNumber; $i++) {
    if ($i % 5 == 0) {
        echo $i . "\n";
    }
}


// Exercise #5

$userNumber = $_POST['userNumber'];

while ($userNumber % 3 != 0) {
    echo "Input right number";
    break;
}
if ($userNumber % 3 == 0) {
    echo "You input the right number";
}


// Exercise #6

$minNumber = 10;
$maxNumber = 20;

for ($i = $minNumber; $i < $maxNumber; $i++) {
    echo $i ** 2 . "\n";
}


// Exercise #7

$numberOfNumbers = readline("Input numbers of numbers: ");

$counterPositive = 0;
$counterNegative = 0;
$counterZeros = 0;

for ($i = 1; $i <= $numberOfNumbers; $i++) {
    $line = readline("Right your $i number: ");
    if ($line > 0) {
        $counterPositive++;
    } else if ($line < 0) {
        $counterNegative++;
    } else if ($line == 0) {
        $counterZeros++;
    }
}

echo "Positive numbers are " . $counterPositive . " and negative numbers are " . $counterNegative . " ande zeros are " . $counterZeros;


// Exercise #9

$height = readline("Input height: ");

$numberOfEmptyCells = $height - 1;
$emptyCell = " ";

$numberOfNOTEmptyCells = 1;
$notEmptyCell = "^";

for ($i = 1; $i < $height; $i++) {

}

echo $emptyCell . $notEmptyCell . $emptyCell;

// 4 1 4
// 3 3 3
// 2 4 2
// 1 7 1
// 0 9 0



// Exercise #10

$number = readline("Input number: ");
$lengthOfNumber = strlen($number);

for ($i = 0; $i <= $lengthOfNumber; $i++) {
    if ($i > 0) {
        echo $number[$lengthOfNumber - $i] . "\n";
    }
}






























