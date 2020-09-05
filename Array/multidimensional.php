<?php

$data = [
  [
    'name' => 'John',
    'age' => 20,
    'country' => 'EUA'
  ],
  [
    'name' => 'Mary',
    'age' => 20,
    'country' => 'Canada'
  ],
];

print_r($data);
// Array
// (
//     [0] => Array
//         (
//             [name] => John
//             [age] => 20
//             [country] => EUA
//         )

//     [1] => Array
//         (
//             [name] => Mary
//             [age] => 20
//             [country] => Canada
//         )

// )

var_dump($data[0]['name']); // string(4) "John"

// Adicionando um novo elemento ao array
$data[] = [
  'name' => 'Peter',
  'age' => 20,
  'country' => 'England'
];

print_r($data);
// Array
// (
//     [0] => Array
//         (
//             [name] => John
//             [age] => 20
//             [country] => EUA
//         )

//     [1] => Array
//         (
//             [name] => Mary
//             [age] => 20
//             [country] => Canada
//         )

//     [2] => Array
//         (
//             [name] => Peter
//             [age] => 20
//             [country] => England
//         )

// )