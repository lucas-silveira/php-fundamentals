<?php

$data1 = [
  'name' => 'John',
  'age' => 20
];

$data2 = [
  'name' => 'Mary',
  'country' => 'EUA'
];

$concatData = $data1 + $data2;
print_r($concatData);
// Array
// (
//     [name] => John
//     [age] => 20
//     [country] => EUA
// )

var_dump(is_array($concatData)); // bool(true)
var_dump(count($concatData)); // int(3)

$randomIndex = array_rand($concatData);
var_dump($concatData[$randomIndex]);

unset($concatData);
// var_dump($concatData); // NULL

$concatData = array_merge($data1, $data2);
print_r($concatData);
// Array
// (
//     [name] => Mary
//     [age] => 20
//     [country] => EUA
// )

$pars = [0, 4, 2, 8, 6, 10];
sort($pars);
print_r($pars);
// Array
// (
//     [0] => 0
//     [1] => 2
//     [2] => 4
//     [3] => 6
//     [4] => 8
//     [5] => 10
// )