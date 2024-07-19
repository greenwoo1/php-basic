<?php
declare(strict_types = 1);

$value = null;
$multiplier = null;

$pattern = '/^[\@\$\!\)\*\#%\^&\(\)\-\_\=\+\{\}\[\]\|\\\:\"\;\'\<\>\,\.\?\/]+$/';




function power(float $value, int $multiplier): float
{
    if (!is_int($multiplier)) {
        if (is_string($value)) {

              return $value ** $multiplier;

        } else {

            echo "Error: Base and exponentiation must not be strings." . PHP_EOL;
            return 0;
        }
    } else {

        echo "Error: Degree must be an integer." . PHP_EOL;
        return 0;
    }
}

function validator(mixed $value, mixed $multiplier): void
{
    if (!is_int($multiplier)) {
        echo "Error: The number must be an integer" . PHP_EOL;
    } else {
        if ()
    }
}

$value = 5;
$multiplier = 5;

var_dump($value);

echo power($value, $multiplier) . PHP_EOL;
