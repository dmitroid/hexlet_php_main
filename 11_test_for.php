<?php
/*
Напишите функцию sumDouble, которая принимает на вход два числа: начало последовательности и конец
последовательности, а возвращает сумму возведенных в квадрат чисел последовательности с шагом 2. То есть из
последовательности от 3 до 7 будут взяты числа 3, 5, 7.

Пример:

8 * 8 + 10 * 10 + 12 * 12 + 14 * 14 == sumDouble(8, 14);
3 * 3 + 5 * 5 == sumDouble(3, 6);
*/
function sumDouble($a, $b)
{
    $start = $a;
    $finish = $b;
    $sum = 0;

    for ($i = $start; $i <= $finish; $i = $i + 2) {
        $sum += ($i ** 2);
    }

    return $sum;
}

echo sumDouble(-3, 6) . " - sum kvadratov s shagom 2";

echo "\n";
// Факториал числа
function factorial($n)
{
    $result = 1;

    for ($i = 2; $i <= $n; $i++) {
        $result = $result * $i;
    }
    return $result;
}
echo factorial(100) . " - factorial chisla N";
echo "\n";
// функция проверки простого числа
function isPrime($n)
{
    $isPrime = true;
    for ($i = 2; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    return $isPrime;
}
var_dump(isPrime(7));
echo " - proverka prostogo chisla";

// Сумма простых чисел на отрезке от 0 до N

echo "\n";
function sumPrimes($num)
{
    $suma = 0;
    for ($i = 1; $i <= $num; $i++) {
        if (!isPrime($i)) {
            continue;
        }
        $suma += $i;
    }
    return $suma;
}
echo sumPrimes(5) . " - сумма простых чисел в отрезке N";
