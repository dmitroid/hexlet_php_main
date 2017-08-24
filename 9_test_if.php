<?php
/*
Реализуйте функцию result, которая принимает на вход результат хоккейного матча и исход который предполагался. Если счет был угадан верно, то функция должна вернуть 2, если исход был угадан верно (победа, ничья, поражение) то функция должна вернуть 1, во всех остальных случаях функция возвращает 0.

Функция result принимает на вход четыре параметра: $a, $b, $c, $d. Которые, на самом деле, являются результатами матча игры двух хоккейных команд: a:b и c:d.

Примеры:

2 == result(1, 2, 1, 2) // 1:2 - реальный счет, 1:2 - предполагаемый
1 == result(1, 3, 1, 2) // 1:3 - реальный счет, 1:2 - предполагаемый
0 == result(4, 3, 0, 0) // 4:3 - реальный счет, 0:0 - предполагаемый
*/
function result($a, $b, $c, $d)
{
    if (($a == $c) && ($b == $d))
    {
        return 2;
    }
    elseif ((($a < $b) && ($c < $d)) || (($a > $b) && ($c > $d)) || (($a == $b) && ($c == $d)))
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

var_dump(result(4, 4, 2, 2));
