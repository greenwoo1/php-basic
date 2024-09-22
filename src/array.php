<?php
declare(strict_types = 1);

function randArray( int $length = 10, int $min = 1, int $max = 10 ) : array
{
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

$myArray = randArray();
print_r($myArray);

$sum = 0;
foreach ($myArray as $value) {
    $sum += $value;
}

echo $sum . PHP_EOL;


$sum2 = 1;
foreach ($myArray as $value) {
    $sum2 *= $value;
}
echo $sum2 . PHP_EOL;

$count = 0;
foreach ($myArray as $value) {
    if ($value == 5 ) {
        $count++;
    }
}

echo $count . PHP_EOL;

foreach ($myArray as $value) {
    if ($value % 3 == 0) {
        echo $value . PHP_EOL;
    }
}
