<?php

require_once '../vendor/autoload.php';

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function runningSum($nums) {
    foreach($nums as $key => $num) {
       $result[] = $num + ($result[$key-1] ?? 0);
    }
    return $result;
}

var_dump(runningSum([1,2,3,4]));
