<?php

function reverseWords($str)
{
    $strings = explode(" ", $str);
    $arrWithRevertedStrings = [];
    foreach ($strings as $str) {
        $arrWithRevertedStrings[] = strrev($str);
    }
    return implode(" ", $arrWithRevertedStrings);
}

echo reverseWords("The quick brown fox jumps over the lazy dog.") .  PHP_EOL;
