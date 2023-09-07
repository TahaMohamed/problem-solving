<?php

/*
* Even or Odd
* - Create a function that takes an integer as an argument and returns "Even" for even numbers or 
*   "Odd" for odd numbers.
*/

function evenOrOdd(int $number) : string 
{
    return $number % 2 ? 'Odd' : 'Even';
}
echo 'Even or Odd <br/>';
echo evenOrOdd(-1);

/*
* Reversed String
* - Complete the solution so that it reverses the string passed into it.
*/

function reverseString(string $text) : string 
{
    $reversed = '';
    for($i = strlen($text) - 1; $i >= 0; $i--){
        $reversed .= $text[$i];
    }
    return $reversed;
}
echo 'Reversed String <br/>';
echo reverseString('h');

/*
* Convert a Boolean to a String
* - Implement a function which convert the given boolean value into its string representation.
* - Note: Only valid inputs will be given.
*/

function boolToString(bool $str) : string 
{
    return $str ? 'true' : 'false';
}

echo 'Convert a Boolean to a String <br/>';
echo boolToString(false);