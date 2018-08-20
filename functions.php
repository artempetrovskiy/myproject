<?php

function sumTwoNumbers($var1, $var2){
    echo $var1 + $var2;
}

sumTwoNumbers(1, 2);

echo "\n";



function recurce($a){
    if ($a < 10) {
        echo $a . "\n";
        recurce($a + 1);
    }
}


recurce(1);










