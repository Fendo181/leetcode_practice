<?php

require_once '../vendor/autoload.php';
//breakpoint
// eval(\Psy\sh());

/**
 * @param Integer $num
 * @return Integer
 */
function minimumSum($num) {
    $numSort = str_split($num);
    sort($numSort);
    return (($numSort[0]*10) + $numSort[2]) + (($numSort[1]*10) + $numSort[3]);
}

var_dump(minimumSum(2932));
