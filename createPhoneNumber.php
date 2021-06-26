<?php

function createPhoneNumber($digits) {
    return sprintf("(%d%d%d) %d%d%d-%d%d%d%d", ...$digits);
}

$numberArr = [1,2,3,4,5,6,7,8,9,0];
var_dump(createPhoneNumber($numberArr));