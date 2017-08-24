<?php
function EvenNumber($num)
{
    if ($num % 2 != 0) {
        return $num . ' - not even number';
    }
    else {
        return $num . ' - even number';
    }
}
echo EvenNumber(11);

// Реализуйте функцию isBigEven, которая возвращает true в том случае если переданный параметр четное число,
// которое больше или равно 1000 и false в остальных случаях.

function isBigEven($n)
{
    return ($n % 2 == 0) && ($n >= 1000);
}
var_dump(isBigEven(1002));
