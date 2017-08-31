<?php
/*
Вес Хэмминга это количество единиц в двоичном представлении числа.

src/App/Solution/Solution.php
Реализуйте функцию hammingWeight, которая считает вес Хамминга.

Пример:

0 == hammingWeight(0)
1 == hammingWeight(4)
4 == hammingWeight(101)
*/
$test = 12345;
echo hammingWeight($test);

function hammingWeight($num)
{
    $bin = str_split(decbin($num));
    $i = 0;
    foreach ($bin as $value) {
        if ($value) {
            $i++;
        }
    }
    return $i;
}
