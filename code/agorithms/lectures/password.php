<?php

function addZeroPrefix(int $number): string
{
    return str_pad($number, 6, 0, STR_PAD_LEFT);
}

$rand = addZeroPrefix(rand(0, 999999));
echo "We are looking for: " . $rand . "\n";
$rand = sha1($rand);

$password = 1;
while ($rand !== sha1(addZeroPrefix($password))) {
    $password++;
}

echo "Encryped password is: " . addZeroPrefix($password) . "\n";
