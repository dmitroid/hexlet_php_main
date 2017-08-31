<?php
/*
Реализуйте функцию compact которая принимает на вход массив и возвращает новый, полученный удалением элементов со значением null. Ключи оставшихся элементов (тех которые не были null) должны сохраняться.

Пример:

<?php

compact([1, 2, null]); // [1, 2]
compact(['name' => 'mark', 'age' => null, 'sex' => 'yes']); // ['name' => 'mark', 'sex' => 'yes']
compact([2, null, '', 1, null, [], 0]); // [2, 2 => '', 1, 5 => [], 0]
Обратите внимание на то что в примере выше, запись [2, 2 => '', 1, 5 => [], 0] эквивалентна записи [0 => 2, 2 => '', 3 => 1, 5 => [], 6 => 0]. То есть ключи сохранены. Например в исходном массиве значение 0 находится под индексом 6 и в результирующем так же.
*/
function compact1(array $array)
{
    // BEGIN (write your solution here)
    $result = [];
    foreach ($array as $key => $value) {
        if (!is_null($value)) {
            $result[$key] = $value;
        }
    }
    return $result;
    // END
}

$test1 = [1, 2, null];
$test2 = ['name' => 'mark', 'age' => null, 'sex' => 'yes'];
$test3 = [2, null, '', 1, null, [], 0];

print_r(compact1($test3));
