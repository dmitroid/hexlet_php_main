
<?php
/*
Реализуйте функцию reverse, которая переворачивает строку.

Пример:

reverse('hello, world!'); // !dlrow ,olleh
Подсказки
Для подсчета длины строки используйте функцию strlen.
*/
$text = "Mama mia";

function textReverse($text)
{
    $txt = $text;       // приняли строку
    $length = strlen($txt);     // узнали ее длину
    $new_txt = '';      // создали пустую переменныую для строки с переворотом

// запускаем цыкл перебора символов в строке

    for ($i=0; $i < $length; $i++) {

        $new_txt = $txt[$i] .$new_txt;        // делаем подстановку соответствующих значений в строку
    }
    return $new_txt;        // возвращаем из функции перевернутую строку
}

echo textReverse($text);
