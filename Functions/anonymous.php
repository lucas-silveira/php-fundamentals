<?php

$sum = function($a, $b) {
  return $a + $b;
};

var_dump($sum(1, 2)); // int(3)

function execute($a, $b, $op, $func) {
  $result = $func($a, $b);
  return "$a $op $b = $result";
}

var_dump(execute(2, 3, '+', $sum)); // string(9) "2 + 3 = 5"