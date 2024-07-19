<?php
declare(strict_types = 1);

$radius = null;
$value = null;


echo "Enter the radius of the circle" . PHP_EOL;

$value = fgets(STDIN);

$radius = converter($value);

echo circleSquare($radius, pi()) . PHP_EOL;

function converter(string $string): float
{
    if (is_numeric($string) === false) {
        echo "Error! The radius must be a number." . PHP_EOL;
        exit();
    }
    return (float)$string;
}

function circleSquare(float $radius, float $pi): float
{
    return round($pi * ($radius ** 2), 2);
}






