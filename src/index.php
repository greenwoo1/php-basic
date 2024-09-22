<?php

//$array = ['key1' => 'value1', 'key2' => 'value2', 'key3' => 'value3'];
//
//$arrayValues = array_values($array);
//$arrayKeys = array_keys($array);
//
//print_r($arrayValues);
//print_r($arrayKeys);

$keys = ['key1', 'key2', 'key3'];
$values = ['value1', 'value2', 'value3'];

if (count($keys) === count($values)) {
    $result = array_combine($keys, $values);
} else {
    echo 'Error' . PHP_EOL;
}


