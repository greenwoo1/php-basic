<?php
declare(strict_types = 1);

//printer();
//function printer()
//{
//    echo "Hello PHP!\n";
//}

$variable = 5;

if (is_numeric($variable)) {
    function existNumber()
    {
        echo "Is it a number!" . PHP_EOL;
    }
}

//existNumber();

function printer($name)
{
    echo "Hello " . $name . PHP_EOL;
}

//printer("Boris");
//
//$name = "Alex";
//
//printer($name);


//function power($number, $pow = 2)
//{
//    echo $number ** $pow . PHP_EOL;
//}


//power(2, 4);

//function calc($number1, $number2)
//{
//    if (is_numeric($number1) && is_numeric($number2)) {
//        return $number1 + $number2;
//    } else {
//        return false;
//    }

//    if (!is_numeric($number1) && !is_numeric($number2)) {
//        return false;
//    }
//
//    return $number1 + $number2;
//}


//$value1 = 10;
//$value2 = "sdfsdfsdf";
//
//
//$result = calc($value1, $value2);
//
//echo $result . PHP_EOL;
//
//
//if ($result === false) {
//    echo "Pls type correct number!" . PHP_EOL;
//} else {
//    echo $result;
//}


function printSum(float $a, float $b): float|false
{
    if (!is_numeric($a) || !is_numeric($b)) {
        return false;
    }
    return $a + $b;
};

//echo printSum(5, 5);

function hello(): void
{
    echo "Hello world" . PHP_EOL;
}

function test(bool $switch): never
{
    if ($switch === false) {

    }

    exit();
}

function apiFetch(string $uuid): mixed
{
    $data = apiCall($uuid);

    return $data;
}


function search(?string $location = null, ?string $sector = null, ?string $salaryMin = null, ?string $salaryMax = null)
{
    $query = '';
    if ($location !== null) {
        // todo add query condition
    }

    if ($sector !== null) {
        // todo add query condition
    }

    if ($salaryMin !== null) {
        // todo add query condition
    }

    if ($salaryMax !== null) {
        // todo add query condition
    }
}

search(null,null,'1500', '3000');

search(salaryMax: '3000');