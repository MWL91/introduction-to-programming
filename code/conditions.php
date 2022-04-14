<?php

$a = 1000;
$b = 5000;

if ($a <= $b && $a >= 500 && $b >= 10000) {
    echo "b is bigger to a";
} elseif ($a >= $b) {
    echo 'a is bigger then b';
} else {
    echo "b is bigger to a";
}

echo "\n";
