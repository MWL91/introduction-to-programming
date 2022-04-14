<?php

$a = ['a', 'b', 'c'];

$a = [
    'name' => "Marcin",
    // 'work_as' => ["Teacher", "Programmer"],
    'surname' => "Lenkowski",
];

foreach ($a as $key => $value) {

    if ($key === 'name') {
        continue;
    }

    echo $key . ' is for ' . $value . "\n";
}

echo 'END';
