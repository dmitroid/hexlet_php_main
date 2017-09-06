<?php
/*
Реализуйте функцию reverseInt, которая переворачивает цифры в переданном числе:

31 == reverseInt(13);
-321 == reverseInt(-123);
*/
$test = 9;
echo reverseInt($test);

function reverseInt($num)
{
    $result = (int) strrev($num);
    if ($num < 0) {
        $result = -1 * $result;
    }
    return $result; // return $num > 0 ? $reverse : -$reverse;
}
