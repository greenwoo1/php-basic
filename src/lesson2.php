<?php
//echo "Hello World!";

//$text = "Hello World!\n";
//$_text = "Hello World!\n";
//
//echo $text;
//echo $_text

//Style for name variables
//$camelCase = "SomeCamelCaseText\n";
//
//$snake_case = "some_snake_case_text\n";
//
//echo $camelCase;
//echo $snake_case;

//$emptyVariable = null;
//
//var_dump($emptyVariable);
//
//$emptyVariable2;
//
//echo $emptyVariable2;

//$string = "some text";
//
//var_dump($string);

//$integer = 1;
//
//var_dump($integer);
//
//var_dump(PHP_INT_MAX);
//
//var_dump(PHP_INT_MIN);

//$float = 3.14;
//var_dump($float);

//$bool = true;
//$bool2 = false;
//
//var_dump($bool);
//var_dump($bool2);

// func isset() - check variable is exist.

//$variable = "test";
//
//$result = isset($variable);
//
//var_dump($result);

//https://www.php.net/manual/ru/function.isset.php - doc

//unset() - fucn while delete variables.

//unset($variable);
//
//var_dump($variable);

//$string = (int)'55';
//
//var_dump($string);
//
//$variable = (float)'5.34';
//
//var_dump($variable);

//$variable = true;
//
//$result = is_int($variable);
//
//var_dump($result);


// & - Link on variable
//$a = 5;
//
//$b = &$a;
//
//$a = $a + 1;
//
//echo $a . PHP_EOL;

//$a = 2;
//$b = 2;
//$c = 2;
//$d = 2;
//$e = 2;
//
//echo $a + $b + $c + $d + $e / 5;
//
//echo $b . PHP_EOL;



//$vatiable = (bool)false;
//$vatiable2 = (bool)0;
//$vatiable3 = (bool)-0;
//$vatiable4 = (bool)0.0;
//$vatiable5 = (bool)-0.0;
//$vatiable6 = (bool)'';
//$vatiable7 = (bool)'0';
//$vatiable8 = (bool)null;
//
//
//
//var_dump($vatiable);
//var_dump($vatiable2);
//var_dump($vatiable3);
//var_dump($vatiable4);
//var_dump($vatiable5);
//var_dump($vatiable6);
//var_dump($vatiable7);
//var_dump($vatiable8);

$x = 8;
$y = '8';

var_dump($x !== $y);