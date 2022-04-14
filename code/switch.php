<?php

$a = "home";

switch ($a) {
    case "home":
        echo "You are on homepage";
        //break;
    case "buy":
        echo "You are on buy page";
        //break;
    case "contact":
        echo "You are on contact page";
        break;
    default:
        echo "404 :(";
}
