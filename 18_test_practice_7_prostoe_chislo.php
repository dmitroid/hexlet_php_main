<?php


function isPrime($n)
{
    if ($n <= 1) {
        return false;
    }
    else {
        for ($i=2; $i <= $n/2; $i++) {
            if ($n % $i == 0) {
                return false;
                break;
            }
        }
        return true;
    }
}


$test = 0;
var_dump(isPrime($test));
