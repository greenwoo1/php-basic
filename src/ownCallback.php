<?php
declare(strict_types=1);

$value = 2;
$mult = 2;

function power(int $value, int $mult, ?callable $function = null) : int {
    $result = $value * $mult;

    if ($function !== null) {
        $function($result);
    }

    return $result;
}

$printValue = function (int $value) : void {
    echo "Result: " . $value . PHP_EOL;
};

echo power($value, $mult) . PHP_EOL;

power($value, $mult, $printValue);