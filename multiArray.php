<?php

$myArray = [
    ["name" => "Розы", "price" => 100, "count" => 15],
    ["name" => "Тюльпаны",  "price" => 60, "count" => 25],
    ["name" => "Орхидеи",  "price" => 180, "count" => 7],
];

var_dump($myArray);

foreach ($myArray as $keyName => $subArray){
    foreach ($subArray as $key => $val){
        echo $subArray[$key] . "\n";
    }
}



$arr = [
    "man_1" => ["name" => "Vasia", "prof" => "Slesar", "Zp" => 2500],
    "man_2" => ["name" => "Petia", "prof" => "Driver", "Zp" => 2700],
    "man_3" => ["name" => "Vovan", "prof" => "Plotnik", "Zp" => 3500],
];

foreach ($arr as $keyName => $subArray){
    echo $keyName . "\n";
    foreach ($subArray as $key => $val){
        echo $subArray[$key] . "\n";
    }
}


$max = 10;

$arrOne = [];
$arrTwo = [];

for ($i = 0; $i < $max; $i++){
    array_push($arrOne, $i);
}

foreach ($arrOne as $keyName => $keyValue){
    array_push($arrTwo, $arrOne);
}

foreach ($arrTwo as $keyTwo => &$subArray){
    foreach ($subArray as &$keyOneValue){
        $keyOneValue = $keyOneValue * $keyTwo;
    }
}

unset($subArray);
unset($keyOneValue);

var_dump($arrTwo);


foreach ($arrTwo as $keyName => $subArray){
    echo "\n";
    foreach ($subArray as $key => $val){
        echo $subArray[$key] . " ";
    }
}




