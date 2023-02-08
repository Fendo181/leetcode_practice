<?php
require_once '../vendor/autoload.php';

/**
 * @param Integer[][] $accounts
 * @return Integer
 */
function maximumWealth($accounts) {
    $results = [];
    foreach($accounts as $v){
       $results[] = array_sum($v);
    }
    sort($results);

    return $results[-1];
}

$accounts = [[1,5],[7,3],[3,5]];
var_dump(maximumWealth($accounts));
