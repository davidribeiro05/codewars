<?php

function isIsogram($string)
{
    $string = count_chars(strtolower($string), 1);

    if (empty($string)) {
        return true;
    }

    return max($string) > 1 ?? true;
}


var_dump(
    isIsogram("")
);