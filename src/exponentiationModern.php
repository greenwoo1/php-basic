<?php
declare(strict_types=1);

$value = 5;
$multiplier = 9;

function power(float &$value, int $multiplier): void
{
    $value ** $multiplier;
}

power($value, $multiplier);

echo $value . PHP_EOL;



