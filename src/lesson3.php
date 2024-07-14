<?php

//$string = '';
//$number = 5;
//
//$result = $string and $number;
//
//$result = $string && $number;
//
//var_dump($result);

//$number1 = 5;
//$number2 = 10;
//$number3 = 15;
//$number4 = 0;
//
//$number5 = $number2 > $number3;
//
//$result = ($number1 && $number2) || ($number3 && $number4);
//
//var_dump($result);

//$status = 200;
//
//if ($status === 200) {
//    echo "OK" . PHP_EOL;
//}

//$value1 = false;
//$value2 = true;
//
//if ($value1 && $value2) {
//    echo "success" . PHP_EOL;
//} else {
//    echo "fail" . PHP_EOL;
//}

$status = 301;

//if ($status === 200) {
//    echo "OK" . PHP_EOL;
//} elseif ($status === 404) {
//    echo "Not Found" . PHP_EOL;
//} elseif ($status === 300) {
//    echo "Bad Request" . PHP_EOL;
//} else {
//    echo "Default" . PHP_EOL;
//}

switch ($status) {
    case 200:
        echo "OK" . PHP_EOL;
        break;
    case 404:
        echo "Not Found" . PHP_EOL;
        break;
    case 300:
        echo "Bad Request" . PHP_EOL;
        break;
    default:
        echo "Default" . PHP_EOL;
}