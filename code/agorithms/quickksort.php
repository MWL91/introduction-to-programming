<?php
function quickSort($arr)
{
    if (count($arr) <= 1) {
        return $arr;
    }

    $pivot = $arr[0];
    $smaller = [];
    $equal = [];
    $greater = [];

    foreach ($arr as $x) {
        if ($x < $pivot) {
            array_push($smaller, $x);
        }
    }

    foreach ($arr as $x) {
        if ($x == $pivot) {
            array_push($equal, $x);
        }
    }

    foreach ($arr as $x) {
        if ($x > $pivot) {
            array_push($greater, $x);
        }
    }

    return array_merge(quickSort($smaller), $equal, quickSort($greater));
}

$tablica = array(16, 16, 4, 4, 10, 6, 14, 3, 15, 4, 4, 8, 1, 11, 12, 2, 19, 20, 7, 13, 5, 9, 1, 0, 18, 17);

$sorted = quickSort($tablica);

var_dump($sorted);
