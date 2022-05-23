<?php

const SECONDS_IN_MINUTES = 60;

function calculateTime(): int
{
    $dressingUp = rand(10, 15) * SECONDS_IN_MINUTES;

    $driveTime = rand(9, 15) * SECONDS_IN_MINUTES;
    $trafficJams = $driveTime * (rand(0, 30) / 100);

    $trafficLights = 0;
    for ($i = 1; $i <= 5; $i++) {
        // counted in seconds already
        $trafficLights += rand(0, 60);
    }

    $waitOnCouncil = rand(15, 45) * SECONDS_IN_MINUTES;

    return $dressingUp + $driveTime + $trafficJams + $trafficLights + $waitOnCouncil;
}

$checks = 10000;
$success = 0;
$totalTime = 0;
// we have 60 minutes max!
const MAX_TIME = 70 * SECONDS_IN_MINUTES;

for ($i = 1; $i <= $checks; $i++) {
    $time = calculateTime();
    if ($time < MAX_TIME) {
        $success++;
    }
    $totalTime += $time;
}

echo "Success confidence level " . (($success / $checks) * 100) . '%';
echo "\n";
echo "Avarage time " .
    round(($totalTime / $checks) / SECONDS_IN_MINUTES) . 'min';
echo "\n";
