<?php

$a = 'hi';
$b = 'yo';
$c = 'hi';

$testA = $a == $b;
$testB = $a == $c;
$testC = $a === $c;

echo 'hi...';

// function testTypeHinting(string $firstParam = "test") : void {

// }

function testTypeHinting(string $firstParam = 'test'): void
{
    echo $firstParam;
}

testTypeHinting('ho....');
// testTypeHinting(null);

$arr = [1,2,3,4,5];

[$a, $b, $c] = $arr;
print_r($a);
print_r($b);
print_r($c);
