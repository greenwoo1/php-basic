<?php
declare(strict_types = 1);

$value = null;
$multiplier = null;

echo "Enter the number you want to enter into the exponentiation" . PHP_EOL;

$value = fgets(STDIN);

echo "Enter the number you want to multiply by" . PHP_EOL;

$multiplier = fgets(STDIN);






function validator(string $value, string $multiplier): int|float
{


    if (is_string($multiplier) === true && is_float($multiplier) === false) {

        return (int)$multiplier;
    } else {
        echo "Error! Addend must be an integer!" . PHP_EOL;
    }

    return (float)$value;
}

