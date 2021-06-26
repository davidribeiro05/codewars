<?php

function detect_pangram($string)
{
    $alphabet = range('a', 'z');
    $string = count_chars(mb_strtolower($string),3);
    $stringArr = str_split($string);

    $arrWithAlphabet = array_map(function ($str) use ($alphabet) {
        if (in_array($str, $alphabet)) {
           return $arrWIthStringValidated[] = $str;
        }
    }, $stringArr);

    $filteredArr = array_filter(array_unique($arrWithAlphabet));
    return count($filteredArr) == count($alphabet);
}


$ex1 = <<<EX1
    Olá será que eu sou um panagrama?
EX1;

$ex2 = <<<EX2
O presidente dos Estados Unidos, Joe Biden, tropeçou três vezes nesta sexta-feira, 19, ao subir as escadas do Air Force One - o avião reservado ao chefe de governo americano -, que o levou de Washington para Atlanta.

No momento em que subia as escadas para entrar na aeronave, Biden perdeu o equilíbrio ainda nos primeiros passos, se agarrou no corrimão com uma das mãos, voltou a tropeçar e conseguiu se segurar com a outra mão.
EX2;

$ex3 = <<<EX3
    A – B – C – D – E – F – G – H – I – J – K – L – M – N – O – P – Q – R – S – T – U – V – W – X – Y – Z 
EX3;


if (detect_pangram($argv[1])) {
    echo "É um pangrama" . PHP_EOL;
} else {
    echo "Não é um pangrama" . PHP_EOL;
}