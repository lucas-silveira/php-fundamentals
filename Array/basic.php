<?php

$list = array(1, 2, 3.4, 'texto');
var_dump($list);
// array(4) {
//   [0]=>
//   int(1)
//   [1]=>
//   int(2)
//   [2]=>
//   float(3.4)
//   [3]=>
//   string(5) 'texto'
// }
print_r($list);
// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3.4
//     [3] => texto
// )

var_dump($list[0]); // int(1)
// var_dump($list[100]); // NULL

$list[0] = 1.0;
var_dump($list[0]); // float(1)

// Map

$data = array(
  'age' => 20,
  'color' => 'white',
  'weight' => 64.2,
);
print_r($data);
// Array
// (
//     [age] => 20
//     [color] => white
//     [weight] => 64.2
// )
// var_dump($data[0]); // NULL
var_dump($data['age']); // int(20)
var_dump($data['color']); // string(3) "white"
var_dump($data['weight']); // float(64.2)

$data['height'] = 1.70;
var_dump($data['height']); // float(1.7)