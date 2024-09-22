<?php
declare(strict_types = 1);

$i = 1;
$factorial = 1;

while($i <= 10) {
    echo $i . PHP_EOL;
    $i++;
}

while ($i <= 5) {
     $factorial = $factorial * $i;
     $i++;
}

echo "Факторіал числа 5: " . $factorial . PHP_EOL;

while ($i <= 20) {
    if ($i % 2 == 0) {
        echo $i . PHP_EOL;
    }
    $i++;
}