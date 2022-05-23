<?php

function calculator(string $artOperator, int ...$numbers): int
{
    $result = 0;
    if ($artOperator === '*') {
        $result = 1;
    }
    foreach ($numbers as $number) {
        switch ($artOperator) {
            case '+':
                $result += $number;
                break;
            case '*':
                $result *= $number;
                break;
        }
    }

    return $result;
}


var_dump(
    calculator('+', 1, 2, 3),
    calculator('*', 2, 3, 4),
);

echo "\n";
