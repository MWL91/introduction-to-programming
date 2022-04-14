<?php

$points = [
	[0, 0],
];

// 2x + y <= 100
$firstMaximum = 100;

$x = $firstMaximum / 2;
$points[] = [$x, 0]; // 50,0

$y = $firstMaximum;
$points[] = [0, $y]; // 0,100

// x + y <= 80
$secondMaximum = 80;

$x = $secondMaximum;
$points[] = [$x, 0]; // 80,0

$y = $secondMaximum;
$points[] = [0, $y]; // 0,80

// join functions
// 2x + y = 100
// x + y = 80
// x = 80 - y
// 2 * (80 - y) + y = 100
// 160 - 2y + y = 100
// y = 160 - 100
$y = 2*$secondMaximum - $firstMaximum;
$x = $secondMaximum - $y;
// y = 60
// x + 60 = 80
// x = 20
$points[] = [$x,$y];

// validate if points are in allowed area
$points = array_filter($points, function($vector) use ($firstMaximum, $secondMaximum) {
	[$x, $y] = $vector;

	$f1 = (2 * $x + $y) <= $firstMaximum;
	$f2 = $x + $y <= $secondMaximum;

	return $f1 && $f2;
});

var_dump($points);

$result = 0;
$selectedVector = null;

foreach($points as $vector) {
	[$x, $y] = $vector;

	// z = 50x + 18y
	$z = 50 * $x + 18 * $y;

	if($z > $result) {
		$result = $z;
		$selectedVector = $vector;
	}
}

var_dump($result, $selectedVector);

