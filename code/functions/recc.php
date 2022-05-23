<?php

function repeatIt(array $numbers, int $value = 0): int
{
    $current = array_shift($numbers);
    if ($current === null) {
        return $value;
    }

    $value += $current;

    return repeatIt($numbers, $value);
}

var_dump(repeatIt([1, 2, 3]));
