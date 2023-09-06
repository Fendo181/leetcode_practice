<?php

require_once '../vendor/autoload.php';
//breakpoint
// eval(\Psy\sh());

class Solution {

    /**
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {
        // 隣接してない状態で花が植えられるかどうかを判定する
        // [1,0,1]が無理
        // [1,1,1]が無理
        // [0,1,0]が無理
        // [0,1,1]が可能
        // [1,1,0]が無理
        // [0,0,0]が可能
        array_unshift($flowerbed, 0);
        array_push($flowerbed, 0);
        $flowerbedLength = count($flowerbed);
        for ($i = 1; $i < $flowerbedLength - 1; $i++) {
            // 隣接する3つが全て0なら植えられる
            if (($flowerbed[$i] + $flowerbed[$i - 1] + $flowerbed[$i + 1]) == 0) {
                $n--;
                $i++;
            }
            // 植えられる花がなくなったら終了
            if ($n <= 0) return true;
        }

        return $n <= 0;
    }
}

$solution = new Solution();
echo $solution->canPlaceFlowers([1,0,0,0,0,0,1], 2);
