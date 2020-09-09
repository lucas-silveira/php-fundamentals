<?php

// callable
$sum = function($a, $b) {
  return $a + $b;
};

var_dump(is_callable($sum)); // bool(true)
$sum = false;
var_dump(is_callable($sum)); // bool(false)

function execute($a, $b, $op, Callable $func) {
  $result = $func($a, $b);
  return "$a $op $b = $result";
}

$sum = function($a, $b) {
  return $a + $b;
};

var_dump(execute(2, 3, '+', $sum)); // string(9) "2 + 3 = 5"