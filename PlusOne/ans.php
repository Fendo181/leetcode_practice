<?php

require_once '../vendor/autoload.php';
//breakpoint
// eval(\Psy\sh());

/**
 * @param Integer[] $digits
 * @return Integer[]
 */
function plusOne($digits) {
    // 受け取った配列を連結して文字列にする
    $str = implode("", $digits);
    // 文字列を数値に変換して1を足す
    // そのまま数が大きすぎると計算がずれるのでbcaddを使う
    // ref: https://www.php.net/manual/ja/function.bcadd.php
    $num = bcadd(strval($str),1);
    // 数値を文字列に変換して1文字ずつ配列にする
    $arr = str_split(strval($num));
    return array_map('intval', $arr);
}
// $digits =[1,2,3];
$digits1 =[7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6];
var_dump(plusOne($digits1));
