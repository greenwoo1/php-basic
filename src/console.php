<?php

echo "Hello! What is your name? \n";

$nameFromUser = fgets(STDIN);

echo 'Nice to meet you! ' . $nameFromUser;

echo "You can enter up to 3 any values" . PHP_EOL;

echo "Enter first value." . PHP_EOL;

$firstValueFromUser = fgets(STDIN);

echo "Enter second value." . PHP_EOL;

$secondValueFromUser = fgets(STDIN);

echo "Enter third value." . PHP_EOL;

$thirdValueFromUser = fgets(STDIN);

$averageValue = (float)$firstValueFromUser + (float)$secondValueFromUser + (float)$thirdValueFromUser / 3;

echo "Average value is $averageValue" . PHP_EOL;

