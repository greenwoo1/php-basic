<?php


// array — Создаёт массив
// count() - Подсчитывает количество элементов в массиве или в объекте Countable
// array_change_key_case — Изменяет регистр ключей в массиве
// array_chunk — Разбивает массив на части
// array_column — Возвращает массив из значений одного столбца входного массива
// array_combine — Создаёт новый массив, используя один массив в качестве ключей, а другой для его значений


//$fruits = array(
//    "fruits" => array("a" => "Apple", 'b' => "Banana", 'c' => "Citrus"),
//    "numbers" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
//    "holes" => array("first", "second", "third", "fourth", "fifth")
//
//);


//print_r($fruits);

//$numbers = [1 => 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//
////print_r($numbers);
//var_dump(count($fruits, COUNT_NORMAL));
//var_dump(count($numbers));

$fruits = ['First' => 'Apple', 'Second' => 'Orange', 'Third' => 'Banana', 'Fourth' => 'Citrus'];

//var_dump(array_change_key_case($fruits));
//var_dump(array_change_key_case($fruits, CASE_UPPER));

//print_r(array_chunk($fruits, 2));
//print_r(array_chunk($fruits, 2, true));

//$fruits2 = array_chunk($fruits,2, true);
//
//print_r($fruits2[0]);

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

//$last_name = array_column($records, 'last_name');
//print_r($last_name);
//
//$id = array_column($records, 'id');
//print_r($id);

