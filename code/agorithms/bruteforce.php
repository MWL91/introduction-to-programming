<?php

function addZeroPrefix(int $number): string
{
    return str_pad($number, 6, 0, STR_PAD_LEFT);
}

function searchPassword(string $crypted): string
{
    $password = 0;

    while ($crypted !== sha1(addZeroPrefix($password))) {
        $password++;
    }

    return addZeroPrefix($password);
}

$probe = 5;
$start = microtime(true);
for ($i = 0; $i <= $probe; $i++) {
    $rand = addZeroPrefix(rand(0, 999999));
    echo "I will look for $rand \n";
    $crypted = sha1($rand);
    echo 'Decrypted: ' . searchPassword($crypted) . ' in ' . searchPassword($crypted) . "\n";
}
echo 'Execution time: ' . (microtime(true) - $start) . "s\n";
