<?php
/*
Реализуйте функцию binarySum, которая складывает переданные бинарные числа (как строки):

<?php

'11' == binarySum('10', '1');
'10010' == binarySum('1101', '101');
*/
function binarySum($a, $b)
{
    $sum = bindec($a) + bindec($b);
    return decbin($sum);
}

echo binarySum('010', '10');
