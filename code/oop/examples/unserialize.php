<?php

class Example
{
    private string $name;
    public string $surname;

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}

$data = file_get_contents("sr.txt");
$unserialized = unserialize($data);

echo $unserialized->surname;

//var_dump($unserialized);
