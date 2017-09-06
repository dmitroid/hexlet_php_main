<?php
/*
ДНК и РНК это последовательности нуклеотидов.
Четыре нуклеотида в ДНК это аденин (A), цитозин (C), гуанин (G) и тимин (T).
Четыре нуклеотида в РНК это аденин (A), цитозин (C), гуанин (G) и урацил (U).
Цепь РНК составляется на основе цепи ДНК последовательной заменой каждого нуклеотида
G -> C
C -> G
T -> A
A -> U
Напишите функцию toRna, которая принимает на вход цепь ДНК и возвращает соответствующую цепь РНК (совершает транскрипцию РНК).
'UGCACCAGAAUU' == toRna('ACGTGGTCTTAA');
*/
$test  = "ACGTGGTCTTAA";

function toRna($phrase)
{
    $result = str_split($phrase);
    $new = [];
    foreach ($result as $value) {
        if ($value == "G") {
            $new[] = "C";
        }
        elseif ($value == "C") {
            $new[] = "G";
        }
        elseif ($value == "T") {
            $new[] = "A";
        }
        elseif ($value == "A") {
            $new[] = "U";
        }
    }
    return implode("", $new);
}

print_r(toRna($test));
