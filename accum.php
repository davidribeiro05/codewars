<?php

/**
 * Função feita para exibir quantas vezes cada caractere aparece
 * @return string
 */
function accum(string $s)
{
    $stringNumber = strlen($s);
    $arrOfStrings = [];

    for ($i = 0; $i < $stringNumber; $i++) {
        $separatedString = mb_substr($s, $i, 1);
        $repetitionString = str_repeat(strtolower($separatedString), $i + 1);
        $arrOfStrings[] = ucfirst($repetitionString);
        $result = implode("-", $arrOfStrings);
    }
    return $result;
}

//echo accum('NyffsGeyylB');
echo accum('Davi');