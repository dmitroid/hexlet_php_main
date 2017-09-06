<?php
/*
Реализуйте функцию fib находящую числа Фибоначчи. Аргументом функции является порядковый номер числа.
Формула:

f(0) = 0
f(1) = 1
f(n) = f(n-1) + f(n-2)
Пример:
2 == fib(3)
5 == fib(5)
55 == fib(10)
*/

function fib($n)
{
    $a = 0;
    $b = 1;
    for ($i=1; $i <= $n; $i++) {
        list($a, $b) = array($b, $a + $b);
    }
    return $a;
}

echo fib(2560) . PHP_EOL;

// рекурсивная версия
function fib1($num)
{
    if ($num < 2) {
        return $num;
    } else {
        return fib($num-1) + fib($num-2);
    }
}
echo fib1(2560) . PHP_EOL;
