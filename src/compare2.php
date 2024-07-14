<?php
$intVar = 42;

$stringVar = "42";

$boolVar = true;

$floatVar = 42.0;

$nullVar = null;

//==
//var_dump($intVar == $stringVar);
//
//var_dump($intVar == $boolVar);
//
//var_dump($intVar == $floatVar);
//
//var_dump($stringVar == $boolVar);
//
//var_dump($floatVar == $boolVar);
//
//var_dump($nullVar == $boolVar);

var_dump($boolVar == $nullVar);

//===

//var_dump($intVar === $stringVar);
//
//var_dump($intVar === $boolVar);
//
//var_dump($intVar === $floatVar);
//
//var_dump($stringVar === $boolVar);
//
//var_dump($floatVar === $boolVar);

var_dump($nullVar === $boolVar);

var_dump($nullVar === $intVar);

//==

//var_dump ((int)$intVar == (string)$stringVar);
//
//var_dump($intVar == $boolVar);
//
//var_dump($intVar == $floatVar);
//
//var_dump($stringVar == $boolVar);
//
//var_dump($floatVar == $boolVar);

var_dump($nullVar == (int)$nullVar);


//===

//var_dump((int)$intVar === (int)$stringVar);
//
//var_dump($intVar === $boolVar);
//
//var_dump($intVar === $floatVar);
//
//var_dump($stringVar === $boolVar);
//
//var_dump($floatVar === $boolVar);

var_dump($nullVar === (int)$nullVar);
var_dump((int)$nullVar === (int)$intVar);