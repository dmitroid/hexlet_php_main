<?php
/*
Реализуйте функцию uniq, которая принимает, как аргумент, массив, и возвращает массив, в котором оставлены только уникальные значения из исходного массива.

Пример:

uniq([]); // []
uniq([12, 1, 1, 3, 5, 10, 3, 10]); // [12, 1, 3, 5, 10]
Подсказки
Создайте внутри новый массив и заполняйте его уникальными значениями.
*/

function uniq(array $arr)
{
    if (empty($arr)) {
        return;
    }
    else {
        //$result = array_unique($arr);
        //return $result;
    $result = [];

    for ($i=0; $i < sizeof($arr); $i++) {
        if (in_array($arr[$i], $result)) {
                continue;
        }
            $result[] = $arr[$i];
    }
        return $result;
}
}
$test = [12, 1, 1, 3, 5, 10, 3, 10];

print_r(uniq($test));
