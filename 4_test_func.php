<?php


function ballVolume($r)
{
    $volume = ((4 * pi() * ($r ** 3) )) / 3;
    return $volume;
}

echo ballVolume(5);

// test commit to git
