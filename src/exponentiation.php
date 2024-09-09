<?php
declare(strict_types=1);

$value = 5;
$multiplier = 9;
$valueLink = 5;

function power(float $value, int $multiplier): float
{
    return $value ** $multiplier;
}

$result = power($value, $multiplier);

echo $result . PHP_EOL;


function powerLink (float &$value, int $multiplier = 2): void
{
    $value = $value ** $multiplier;
}

echo $valueLink . PHP_EOL;

powerLink($valueLink, $multiplier);

echo $valueLink . PHP_EOL;







