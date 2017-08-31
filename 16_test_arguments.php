<?php
//откидываем заданое число $count первых элементов в масиве $arr
function drop(array $arr, int $count = 1)
{
    $result = [];
    for ($i=$count; $i < sizeof($arr) ; $i++) {
        $result[] = $arr[$i];
    }
    return $result;
}

$test = [1, 2, 3, 4, 5, 6, 7, 8, 9];
print_r(drop($test));

print_r(drop($test, 5));
echo round(10.5321, 0) . PHP_EOL; // 11
echo round(10.4321, 2) . PHP_EOL; // 10.54
echo round(10.5, 0, PHP_ROUND_HALF_UP) . PHP_EOL; // 11
echo round(10.5, 0, PHP_ROUND_HALF_DOWN) . PHP_EOL; // 10

// переменное число аргументов для функции

function sumArgs(...$numbers)
{
    return array_sum($numbers);
}

echo sumArgs(1, 2, 3) . PHP_EOL; //6
/*
Реализуйте функцию multiArgs, которая возвращает произведение всех переданных аргументов. Вызванная без аргументов, должна вернуть null.

Пример:

null == multiArgs();
1 == multiArgs(1);
16 == multiArgs(2, 8);
*/

function multiArgs(...$numbers)
{
    if ($numbers == null) {// if (empty($numbers)) 
        return null;
    }
    return array_product($numbers);
}

echo multiArgs(2, 8) . PHP_EOL;

echo multiArgs(1) . PHP_EOL;
