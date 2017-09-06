<?php
/*
Реализуйте функцию isPowerOfThree которая определяет, является ли переданное число натуральной степенью тройки. Например число 27 это третья степень (3^3), а 81 это четвертая (3^4).
*/

function isPowerOfThree($n)
{
    if ($n == 0) {
        return false;
    }
    else {
        for ($i=0; $i <= $n; $i++) {
            if ($n == 3 ** $i) {
                return true;
            }
        }
        return false;
    }
}

$test = 4;
var_dump(isPowerOfThree($test));
