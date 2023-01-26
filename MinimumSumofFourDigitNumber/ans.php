<?php

require_once '../vendor/autoload.php';
//breakpoint
// eval(\Psy\sh());

/**
 * @param Integer $num
 * @return Integer
 */
function minimumSum($num) {
    while(true){
        $numSort = str_split($num);
        ($numSort);
        $numRsort = str_split($num);
        rsort($numRsort);
        $num = (int)(implode($numRsort) - implode($numSort));
        $tmpNum = $num;

        if($tmpNum == $num) break;
    }
    $result = str_split($tmpNum);
    sort($result);
    return (int)($result[0].$result[1]) + (int)($result[2].$result[3]);
}

var_dump(minimumSum(2932));
