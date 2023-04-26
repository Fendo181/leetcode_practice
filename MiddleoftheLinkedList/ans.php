<?php

require_once '../vendor/autoload.php';
//breakpoint
// eval(\Psy\sh());

// * class ListNode {
// *     public $val = 0;
// *     public $next = null;
// *     function __construct($val = 0, $next = null) {
// *         $this->val = $val;
// *         $this->next = $next;
// *     }
// * }


function middleNode($head) {
    // 配列の長さを取得する
    $length = count($head);
    // 配列の長さの半分を取得する
    $half = $length / 2;
    // 奇数の場合
    if ($length % 2 == 1) {
        // 
        $roundNum = round($half);
        $ans = array_slice($head, ($roundNum-1));
    }else{
        $ans = array_slice($head, $half);
    }
    return $ans;
}

$head = [1,2,3,4,5];
var_dump(middleNode($head));
