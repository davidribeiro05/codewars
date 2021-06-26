<?php


function descendingOrder(int $n): int {
    $nArr = str_split($n);
    rsort($nArr);
    return implode('', $nArr);
}


var_dump(descendingOrder(1021));