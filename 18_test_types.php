<?php
/*
Дано неотрицательное целое число num. Итеративно сложите все входящие в него цифры до тех пор, пока не останется одна цифра.

Для числа 38 процесс будет выглядеть так:

3 + 8 = 11
1 + 1 = 2
Результат: 2

src/App/Solution/Solution.php
Реализуйте функцию addDigits
*/
$test = '48971';
print_r(addDigits($test));
function addDigits($num)
{
    /*
    $result = array_sum(str_split($num));
    while ($result > 9) {
        $result = array_sum(str_split($result));
    }
    */
    while (strlen($num) > 1) {
        $num = array_sum(str_split($num));
    }
    return (int) $num;
}
