<?php

$place = 2;
$points = 0;

switch ($place) {
    case 1:
        $points += 100;
    case 2:
        $points += 50;
    case 3:
        $points += 10;
}

echo $points;
