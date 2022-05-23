<?php


function addZeroPrefix(int $number): string
{
    return str_pad($number, 6, 0, STR_PAD_LEFT);
}

global $step;
$step = 0;

function searchMonteCarlo(string $crypted): string
{
    global $step;
    $checked = [];
    $password = 0;

    while ($crypted !== sha1(addZeroPrefix($password))) {
        do {
            $step++;
            $password = rand(0, 999999);
        } while (in_array($password, $checked));
    }

    return addZeroPrefix($password);
}

$higher = 0;
$probe = 10;
$start = microtime(true);
for ($i = 0; $i <= $probe; $i++) {
    $rand = addZeroPrefix(rand(0, 999999));
    echo "I will look for $rand";
    $crypted = sha1($rand);
    $step = 0;

    $passwordDecrypted = searchMonteCarlo($crypted);

    if ((int)$passwordDecrypted <= $step) $higher++;

    echo "\n";
    echo 'Decrypted: ' . $passwordDecrypted . ' in ' . $step;
    echo "\n";
}

echo 'Execution time: ' . (microtime(true) - $start) . "s\n";

echo "For " . $probe . ' higher was ' . $higher . ' lower was ' . ($probe - $higher) . "\n";
echo 'THIS IS ' . (($higher / 2) >= $probe ? 'GOOD' : 'BAD') . "\n";
