<?php

/*
* Price Of Mangoes
* - There is a "3 for 2" (or "2+1" if you like) offer on mangoes. 
* - For a given quantity and price (per mangoe), calculate the total cost of the mangoes;
* - https://www.codewars.com/kata/57a77726bb9944d000000b06
*/

function mangoesPrice(int $quantity, float $price) : float 
{
    if($quantity <= 0 || $price <= 0) throw new \Exception('You should pass an positive numbers');
    $freeQty = (int) $quantity / 3;
    $paidQuantity = $quantity - $freeQty;
    return $paidQuantity * $price;
}
echo 'Price Of Mangoes <br/>';
echo mangoesPrice(22, 3);

/*
* Quarter of the year
* - Given a month as an integer from 1 to 12, return to which quarter of the year it belongs as an integer number.

* - For example: month 2 (February), is part of the first quarter; month 6 (June), is part of the second quarter; and month 11 (November), is part of the fourth quarter.

Constraint:

1 <= month <= 12
* - https://www.codewars.com/kata/5ce9c1000bab0b001134f5af/php
*/

function yearQuarter(int $month) : int 
{
    if($month <= 0 || $month > 12) throw new \Exception('You should pass a correct month (1-12)');
    if ($month < 4) {
        return 1;
    } elseif ($month < 7) {
        return 2;
    } elseif ($month < 10) {
        return 3;
    }else{
        return 4;
    }

    // Smart Solution
    // return ceil($month / 3);
    
}
echo 'Quarter of the year <br/>';
echo yearQuarter(5);

/*
* Invert values
* - Given a set of numbers, return the additive inverse of each. Each positive becomes negatives, and the negatives become positives.
* - https://www.codewars.com/kata/5899dc03bc95b1bf1b0000ad
*/

function invert(array $numbers) : array 
{
    return array_map(fn($item) => -$item, $numbers);
}
echo 'Invert values <br/>';
print_r(invert([22, 3, -5, 0]));
print_r(invert([]));