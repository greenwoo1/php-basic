<?php

$value = "178.0";

$result = null;

if (is_numeric($value) === true) {
    echo "Error! You entered a numeric value. ";
} else {
    $result = match (lcfirst($value)) {
        "red" => "red" . PHP_EOL,
        "green" => "green" . PHP_EOL,
        "blue" => "blue" . PHP_EOL,
        "brown" => "brown" . PHP_EOL,
        "violet" => "violet" . PHP_EOL,
        "black" => "black" . PHP_EOL,
        default => "white" . PHP_EOL
    };
}

echo $result . PHP_EOL;
