<?php
function test()
{
    static $a = 0;
    echo $a;
    $a++;
}

test(); // will print 0
test(); // will print 1
test(); // will print 2

?>