<?php



function createArray(int $length): array
{
    $array = [];

    for ($i = 0; $i < $length; $i++) {
        $array[] = rand(1, 100);
    }

    return $array;
}

function sortMyArray(array $array): void
{
    echo "Max :" . max($array) . PHP_EOL;
    echo "Min : " . min($array) . PHP_EOL;
}

$array = createArray(20);

sortMyArray($array);


