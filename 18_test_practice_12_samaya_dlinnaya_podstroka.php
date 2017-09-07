<?php
/*
Реализуйте функцию longestLength принимающую на вход строку и возвращающую длину максимальной последовательности из неповторяющихся символов.
Подстрока может состоять из одного символа. Например в строке qweqrty, можно выделить следующие подстроки: qwe, weqrty.
Самой длинной будет weqrty.
Пример:
longestLength('abcdeef'); // 5
longestLength('jabjcdel'); // 7
*/
$test = 'jabjcdel';

function longestLength($str)
{
    $s = str_split($str); // масив из букв входящаей строки
    //$new[] = (string)$s[0]; // создаем пустой масив для значений возможных подстрок
    for ($p = 0; $p < count($s); $p++) {
        $new[$p] = "";
    }
    for ($i = 0; $i < count($s); $i++) { // берем один элемент из масива всех букв для сравнения с последующими
        for ($j = strpos($str,(string)$s[$i]); $j < count($s); $j++) { // перебираем элементы от начала вхождения заданного элемента
            $in = (string)$s[$j]; // проверяемое значение
            $sr = (string)$new[$i]; // формируемая подстрока по элементу
            if (!strstr($sr, $in)) { // если елемента нет в подстроке
                $new[$i] .= $s[$j]; // то добавляем в подстроку
            }
            elseif ($sr == $in) // для варианта первой проверки когда элементы совпадают
            {
                continue;
            }
            else {
                break;
            }
        }
    }
    $i = 0;
    $result = strlen($new[0]);
    for ($i = 0; $i < sizeof($new); $i++) {
        if ($result < strlen($new[$i])) {
            $result = strlen($new[$i]);
        }
        else {
            continue;
        }
    }
    return $result;

    // return $new;
}

print_r(longestLength($test));
