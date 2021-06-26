<?php

function alphabet_position(string $s)
{
    $alphabet = range('a', 'z');
    $stringToArr = str_split(strtolower($s));
    $arrWithFilteredLetters = array_map(function ($str) use ($alphabet) {
        if (in_array($str, $alphabet)) {
            return $arrWIthStringValidated[] = $str;
        }
    }, $stringToArr);

    $arrWithComparison = array_map(function ($str) use ($alphabet)  {
        return $final[] = array_search($str, $alphabet, true);
    }, array_filter($arrWithFilteredLetters));

     $arrWithComparisonIncremented = array_map( fn ($int) => $int + 1, $arrWithComparison);
     return implode(" " ,array_filter($arrWithComparisonIncremented));
}

echo PHP_EOL . alphabet_position($argv[1]) . PHP_EOL;

