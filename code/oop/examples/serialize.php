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

    public function __toString(): string
    {
        return "example";
    }
}

echo new Example("Marcin", "Lenkowski");

// $example = new Example("Marcin", "Lenkowski");
// $example->surname = "Another example";

// $serializedData = serialize($example);
// file_put_contents("sr.txt", $serializedData);

// var_dump($serializedData);
