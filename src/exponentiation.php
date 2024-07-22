<?php
declare(strict_types=1);

$value = null;
$multiplier = null;

function validator(mixed $value, mixed $multiplier): void
{
    $pattern = '/^[\@\$\!\)\*\#%\^&\(\)\-\_\=\+\{\}\[\]\|\\\:\"\;\'\<\>\,\.\?\/]+$/';

    if (!is_numeric($value) || !is_numeric($multiplier)) {
        echo "Error: Base and exponentiation must be numeric." . PHP_EOL;

    }

    if (preg_match($pattern, (string)$value) || preg_match($pattern, (string)$multiplier)) {
        echo "Error: The entered value has invalid characters" . PHP_EOL;

    }

    if (!is_int((int)$multiplier)) {
        echo "Error: The multiplier must be an integer" . PHP_EOL;
    }
}

function converterToFloat(string &$string): float
{
    return (float)$string;
}

function converterToInteger(string &$string): int
{
    return (int)$string;
}

function power(float $value, int $multiplier): float
{
    return $value ** $multiplier;
}

echo "Write the first number" . PHP_EOL;
$value = trim(fgets(STDIN));

echo "Write the second number" . PHP_EOL;
$multiplier = trim(fgets(STDIN));

echo "variable value: ";
var_dump($value);

echo "variable multiplier: ";
var_dump($multiplier);

validator($value, $multiplier);


$value = converterToFloat($value);
$multiplier = converterToInteger($multiplier);

echo "variable value (after conversion): ";
var_dump($value);

echo "variable multiplier (after conversion): ";
var_dump($multiplier);


$result = power($value, $multiplier);
echo "Result: " . $result . PHP_EOL;
