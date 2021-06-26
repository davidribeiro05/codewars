<?php

//function duplicateCount($text)
//{
//    $strCountChars = count_chars(strtolower($text), 1);
//    $arr = [];
//    foreach ($strCountChars as $key => $value) {
//        if ($value > 1) {
//            $arr[] = utf8_encode(chr($key));
//        }
//    }
//    $result = (empty($arr) ? 0 : strlen(implode("", $arr)));
//    return $result;
//}


function duplicateCount($text)
{
    $strCountChars = count_chars(strtolower($text), 1);

    foreach ($strCountChars as $key => $value) {
        $arr[] = ($value > 1 ?? utf8_encode(chr($key)));
    }

    return  $result = (empty($arr) ? 0 : strlen(implode("", $arr)));
}

echo  duplicateCount("aabbccddeeeeeee") . PHP_EOL;