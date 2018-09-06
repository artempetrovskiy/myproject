<?php

function sumTwoNumbers($var1, $var2){
    echo $var1 + $var2;
}

sumTwoNumbers(1, 2);
echo "\n";



function recurse($a){
    if ($a < 10) {
        echo $a . "\n";
        recurse($a + 1);
    }
}

recurse(1);



function addMoreSymbols(&$stringArg)
{
    $stringArg .= ' and any symbols';
    echo $stringArg;
}

$str = 'First symbols';
addMoreSymbols($str);



function makeCoffee($defaultArgVal = "default")
{
    return "\n Make coffee " . $defaultArgVal . "\n";
}

echo makeCoffee();
echo makeCoffee("capuchino");


function makeCoffeeTwo($typeOfCoffee = [], $coffeeMaker)
{
    $device = is_null($coffeeMaker) ? " by hands" : $coffeeMaker;
    return "\n Make coffee " . implode(", ", $typeOfCoffee) . "$device. \n";
}

echo makeCoffeeTwo([], 'e');
echo makeCoffeeTwo(["lavazza", "espresso"], " in chainik");




function sum(...$numbers)
{
    $sum = 0;
    foreach ($numbers as $value){
        $sum = $sum + $value;
    }
    echo $sum;
}

sum(1, 2, 3, 4);



