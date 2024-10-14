<?php



function createArray(int $length): array
{
    $array = [];

    for ($i = 0; $i < $length; $i++) {
        $array[] = rand(1, $length);
    }

    return $array;
}

function sortMinMax(array $array): void
{
    echo "Max :" . max($array) . PHP_EOL;
    echo "Min : " . min($array) . PHP_EOL;
}

function sortMyArray(array $array): array
{
    asort($array);

    return $array;
}


$array = createArray(20);

sortMinMax($array);

$array = sortMyArray($array);

print_r($array);


