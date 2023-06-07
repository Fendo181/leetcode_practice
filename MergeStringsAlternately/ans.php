<?php

require_once '../vendor/autoload.php';


/**
 * @param String $word1
 * @param String $word2
 * @return String
 */
function mergeAlternately($word1, $word2) {
    $result = '';
    $word1Length = strlen($word1);
    $word2Length = strlen($word2);
    // 2つの入力値から最大の文字数を取得
    $maxLength = max($word1Length, $word2Length);
    // 最大文字数分ループを行って順々にいれていく
    for ($i = 0; $i < $maxLength; $i++) {
        if ($i < $word1Length) {
            $result .= $word1[$i];
        }
        if ($i < $word2Length) {
            $result .= $word2[$i];
        }
    }
    return $result;
}
echo mergeAlternately('abc', 'pqr');
