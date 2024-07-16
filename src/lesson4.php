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


//function printSum(float $a, float $b): float|false
//{
//    if (!is_numeric($a) || !is_numeric($b)) {
//        return false;
//    }
//    return $a + $b;
//};

//echo printSum(5, 5);

//function hello(): void
//{
//    echo "Hello world" . PHP_EOL;
//}

//function test(bool $switch): never
//{
//    if ($switch === false) {
//
//    }
//
//    exit();
//}

//function apiFetch(string $uuid): mixed
//{
//    $data = apiCall($uuid);
//
//    return $data;
//}


//function search(?string $location = null, ?string $sector = null, ?string $salaryMin = null, ?string $salaryMax = null)
//{
//    $query = '';
//    if ($location !== null) {
//        // todo add query condition
//    }
//
//    if ($sector !== null) {
//        // todo add query condition
//    }
//
//    if ($salaryMin !== null) {
//        // todo add query condition
//    }
//
//    if ($salaryMax !== null) {
//        // todo add query condition
//    }
//}
//
//search(null,null,'1500', '3000');
//
//search(salaryMax: '3000');

//function sum(...$numbers)
//{
//    var_dump($numbers);
//}
//
//sum(5);
//
//function div(float $number, int $div = 2): float
//{
//    if ($div < 2 ) {
//        return $number;
//    }
//
//    return $number / $div;
//}

//function dev2(float &$number, int $div = 2): void
//{
//    if ($div > 1 ) {
//        $number = $number / $div;
//    }
//}

//$mynumber = 10;
//
//$result = div($mynumber);
//
//echo $result . PHP_EOL;

function discount(float &$total, float $discount = 100): void
{
    $total -= $discount;
}

$discount = true;
$total = 3500;

if ($discount === true) {
    discount($total);
}

//echo $total . PHP_EOL;


//statis, globals


$function = function (int $a, int $b): int
{
    return $a + $b;
};

//var_dump($function);
//
//echo $function(5, 5) . PHP_EOL;

function myFilter(string $string, ?Closure $function = null): string
{
    if ($function !== null) {
        return $function($string);
    }

    return $string;
}

$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis ante eu rhoncus pulvinar. Quisque 
feugiat dapibus efficitur. Praesent imperdiet enim vel leo fermentum, nec vehicula augue ullamcorper. 
Pellentesque fringilla sem neque, nec sodales nunc blandit congue. Ut vestibulum sapien sodales placerat dapibus. 
Proin tellus mauris, interdum a varius nec, congue sed lorem. Suspendisse vehicula id magna vel rhoncus. 
Suspendisse nec purus nisl. Fusce ex odio, malesuada non ligula nec, tempor dapibus arcu.";


$filterFunc = function (string $string): string {
    return str_replace('o','*',$string);
};

//echo myFilter($text, $filterFunc) . PHP_EOL;

$a = 5;

function calc(float $number): float
{
    global $a;
    return $a = $a * $number;
}

//echo $a . PHP_EOL;
//
//echo calc(5) . PHP_EOL;
//
//echo $a . PHP_EOL;

$function = fn (float $number, int $pow = 2) => $number ** $pow;

echo $function(5) . PHP_EOL;

$text = myFilter('amnet', fn ($string) => str_replace(' ', '', $string));

function counter(): void
{
    static $counter = 0;
    $counter++;
    echo $counter . PHP_EOL;
}

counter();
counter();
counter();
counter();
counter();