<?php

$rates = [5.8, 7.3, 9.8, 6.7];

$double = array_map(fn ($number) => $number * 2, $rates);
print_r($double);
// Array
// (
//     [1] => 7.3
//     [2] => 9.8
// )
