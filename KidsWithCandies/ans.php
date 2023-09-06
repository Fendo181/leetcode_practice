<?php

require_once '../vendor/autoload.php';
class Solution {
    /**
     * @param array[] $candies
     * @param int $extraCandies
     * @return boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        // 与えられた$candiesの中で最大値を求める
        $maxCandies = max($candies);
        // $candiesの要素を順番に取り出して、$extraCandiesを足して$maxCandiesと比較する
        // $maxCandies以下ならtrue、$maxCandiesより大きいならfalseを返す
        foreach ($candies as $candy) {
            $result[] = ($candy + $extraCandies) >= $maxCandies;
        }
        return $result;
    }
}
$solution = new Solution();
eval(\Psy\sh());

$solution->kidsWithCandies([2,3,5,1,3], 3);
