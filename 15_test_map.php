<?php
/*
Реализуйте функцию wordsCount, которая считает количество одинаковых слов в предложении. Результатом функции является ассоциативный массив, в ключах которого слова из исходного текста, а значения это количество повторений.

Пример:

<?php

wordsCount(""); // []
wordsCount("  one two one"); // ["one" => 2, "two" => 1]
Подсказки
Разбиение строки по разделителю explode.
Обрезание концевых пробелов trim.
*/


//$result = trim($text);
//$result = explode(' ', $result);
/*
function wordsCount($arr)
{
    $res = explode(' ', $arr);
    $result = [];

    foreach ($res as $key => $value) {
        $result[$value] = "0";
    }
    foreach ($res as $key => $value) {
        if (!in_array($value, $result)) {
                $result[$value] += 1;
        }
    }
    foreach ($result as $key => $value) {
        if ($key == "") {
            unset($result[$key]);
        }
    }
    return $result;
    }
*/
    // BEGIN
    function wordsCount($sentence)
    {
        $words = explode(" ", $sentence);
        $result = [];
        foreach ($words as $word) {
            if (empty($word)) {
                continue;
            }
            if (!array_key_exists($word, $result)) {
                $result[$word] = 1;
            } else {
                $result[$word]++;
            }
        }

        return $result;
    }
    // END

$text = 'ff dd f f dd d  d d ddd ddd';
print_r(wordsCount($text));
