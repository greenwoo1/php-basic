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

//$status = 301;

//if ($status === 200) {
//    echo "OK" . PHP_EOL;
//} elseif ($status === 404) {
//    echo "Not Found" . PHP_EOL;
//} elseif ($status === 300) {
//    echo "Bad Request" . PHP_EOL;
//} else {
//    echo "Default" . PHP_EOL;
//}

//switch ($status) {
//    case 200:
//        echo "OK" . PHP_EOL;
//        break;
//    case 404:
//        echo "Not Found" . PHP_EOL;
//        break;
//    case 300:
//        echo "Bad Request" . PHP_EOL;
//        break;
//    default:
//        echo "Default" . PHP_EOL;
//}

//$status = 200;
//
//$result = match ($status) {
//    200 => "OK" . PHP_EOL,
//    404 => "Not Found" . PHP_EOL,
//    300 => "Internal Server Error" . PHP_EOL,
//    default => "Unknown status" . PHP_EOL
//
//};
//
//echo $result;

$text = "Hello, my name is John Doe. Test text for this lesson.";

$length = strlen($text);
$limit = 15;

if ($length > $limit) {
    if (($pos = strpos($text, '.')) !== false) {
        $first = substr($text, 0, $pos + 1);
        $second = substr($text, 27, $pos + 1);
    }
}

var_dump($first);
var_dump($second);

//var_dump(strpos($text, '.', 27));