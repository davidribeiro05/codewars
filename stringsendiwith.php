<?php

function solution($str, $ending)
{
    $str = substr($str, strlen($str) - strlen($ending));
    return $str == $ending ? true : false;
}

solution("abc", "bc");