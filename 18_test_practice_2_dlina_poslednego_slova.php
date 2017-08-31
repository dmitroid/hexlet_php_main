<?php
/*
Реализуйте функцию lengthOfLastWord, которая возвращает длину последнего слова переданной на вход строки. Словом считается любая последовательность не содержащая пробелов.

Примеры:

0 == lengthOfLastWord('');
5 == lengthOfLastWord('man in BlacK');
6 == lengthOfLastWord('hello, world!  ');
*/
$test = 'dd fffff fff';
echo lengthOfLastWord($test);

function lengthOfLastWord($string)
{
        $arr_words = explode(" ", trim($string));
        return strlen(array_pop($arr_words));
}
