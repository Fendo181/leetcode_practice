<?php


/**
 * @param String $str1
 * @param String $str2
 * @return String
 */
function gcdOfStrings($str1, $str2) {
    // 2つの文字列から文字数の最大公約数を計算して、その数だけ文字を取得する
    // 文字列を配列に変換する
    $str1Array = str_split($str1);
    $str2Array = str_split($str2);

    // 配列の長さを比較する
    $str1Length = count($str1Array);
    $str2Length = count($str2Array);

    // ユークリッドの互除法を使って最大公約数を求める
    while ($str1Length >= 1 && $str2Length >= 1) {

        if ($str1Length < $str2Length) {
          $str2Length = $str2Length % $str1Length;
        } elseif ($str1Length > $str2Length) {
          $str1Length = $str1Length % $str2Length;
        } else {
            return '';
        }
      }

    if ($str1Length >= 1){
        $num =  $str1Length;
    } else {
        $num =  $str2Length;
    }

    $strArray = array_slice($str1Array, 0, $num);
    // 配列を文字列に連携させる
    $result = implode('', $strArray);
    return $result;
}


echo gcdOfStrings('ABCDEF', 'ABC');
