<?php
require_once '../vendor/autoload.php';
//breakpoint
// eval(\Psy\sh());


/**
 * @param Integer $n
 * @return String[]
 */
function fizzBuzz($n) {
    $i = 1;
    $ans = [];
    while ($i <= $n) {
        switch ($i) {
            case ($i%15 == 0):
                $ans[] = "FizzBuzz";
                break;
            case ($i%3 == 0):
                $ans[] = "Fizz";
                break;
            case ($i%5 == 0):
                $ans[] = "Buzz";
                break;
            default:
                $ans[] = "$i";
                break;
        }
        $i++;
    }
    return $ans;
}

var_dump(fizzBuzz(15));
