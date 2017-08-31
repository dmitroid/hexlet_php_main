<?php
/*
Дано не отрицательное целое число num. Итеративно сложите все входящие в него цифры до тех пор пока не останется одна цифра.

Для числа 38 процесс будет выглядеть так:

3 + 8 = 11
1 + 1 = 2
Результат: 2

src/App/Solution/Solution.php
Реализуйте функцию addDigits

Пример:

0 == addDigits(0)
1 == addDigits(1)
9 == addDigits(9)
1 == addDigits(10)
2 == addDigits(38)
*/

$test = '48971';
print_r(addDigits($test));
function addDigits($num)
{
    while (strlen($num) > 1) {
        $num = array_sum(str_split($num));
    }
    return (int) $num;
}
