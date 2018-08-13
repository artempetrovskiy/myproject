<?php

$age = $_POST['age'];

$message = ($age >= 18) ? 'Заходь' : 'Маловато будет';

echo $message;
