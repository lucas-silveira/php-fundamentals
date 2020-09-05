<?php

$numbers = [1, 2, 3, 4];

foreach ($numbers as $num) {
  print($num);
  print(PHP_EOL);
}

foreach ($numbers as $index => $value) {
  print("$index => $num");
  print(PHP_EOL);
}

foreach ($numbers as $num) {
  $num *= 2;
}

print_r($numbers);
// Array
// (
//     [0] => 2
//     [1] => 4
//     [2] => 6
//     [3] => 8
// )