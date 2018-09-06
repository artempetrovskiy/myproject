<?php

$hostName = 'www.google.com';

$resultL = [];

$result = gethostbyname($hostName);
$resultL = gethostbynamel($hostName);

var_dump($resultL);

var_dump($result);


















