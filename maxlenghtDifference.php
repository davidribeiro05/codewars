<?php

function mxdiflg($a1, $a2)
{
//    $a1 =  count($a1);
//    $a2 =  count($a2);
    $arrWithStringA = [];
    $arrWithStringB = [];

    foreach ($a1 as $item) {
        $arrWithStringA[] = strlen($item);

    }
    var_dump(max($arrWithStringA));
    foreach ($a2 as $item) {
        $arrWithStringB[] = strlen($item);

    }      var_dump(max($arrWithStringB));
}

$s1 = ["hoqq", "bbllkw", "oox", "ejjuyyy", "plmiis", "xxxzgpsssa", "xxwwkktt", "znnnnfqknaz", "qqquuhii", "dvvvwz"];
$s2 = ["cccooommaaqqoxii", "gggqaffhhh", "tttoowwwmmww"];

print(mxdiflg($s1, $s2));

