<?php

function sum(...$numbers) {
  $total = 0;
  foreach ($numbers as $num) {
    $total += $num;
  }
  return $total;
}

var_dump(sum(1, 2, 3, 4)); // int(10)
$array = [1, 2, 3, 4];
var_dump(sum(...$array));  // int(10)