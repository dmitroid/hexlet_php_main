<?php
/*
Реализуйте функцию longestLength принимающую на вход строку и возвращающую длину максимальной последовательности из неповторяющихся символов.
Подстрока может состоять из одного символа. Например в строке qweqrty, можно выделить следующие подстроки: qwe, weqrty.
Самой длинной будет weqrty.
Пример:
longestLength('abcdeef'); // 5
longestLength('jabjcdel'); // 7
*/
$test = 'jabjcdel';

function longestLength($str)
{
    $map = array();
    $max = 0;
    $length = strlen($str);
    $j = 0;

    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];

        if (array_key_exists($char, $map)) {
            $prevIdx = $map[$char];
            $j = max($j, $prevIdx + 1);
        }

        $map[$char] = $i;

        $max = max($max, $i - $j + 1);
    }

    return $max;
}

print_r(longestLength($test));