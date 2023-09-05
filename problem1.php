<?php

/*
* Simple Multiplication
* - This kata is about multiplying a given number by eight if it is an even number and by nine otherwise.
*/

function simpleMultiplication($number) : float 
{
    if(!is_numeric($number)) throw new \Exception('You should pass an number');
    return $number % 2 ? $number * 9 : $number * 8;
}
echo 'Simple Multiplication <br/>';
echo simpleMultiplication("22");


/*
* Century From Year
* - The first century spans from the year 1 up to and including the year 100, the second century 
* - from the year 101 up to *and including the year 200, etc.
* - Given a year, return the century it is in.
*/

function yearCentury($year) : float 
{
    if(!is_numeric($year) || $year < 1) throw new \Exception('You should pass an number');
    return $year % 100 ? (int)($year/100) + 1  : $year/100;
}

echo '<br /> Century From Year <br />';
echo yearCentury(1503);


/*
* Is n divisible by x and y?
* - Create a function that checks if a number n is divisible by two numbers x AND y. 
* - All inputs are positive, non-zero numbers.
*/

function isDivisible($number, $x, $y) : string 
{
    if(!is_numeric($number) || $number <= 0 || $x <= 0 || $y <= 0) throw new \Exception('You should pass a positive numbers');
    return $number % $x === 0 && $number % $y === 0 ? "{$number} is divisible by {$x} and {$y}" : "{$number} is not divisible by {$x} and {$y}";
}

echo '<br /> Is n divisible by x and y? <br />';
echo isDivisible(24, 2, 3);