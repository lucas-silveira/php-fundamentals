<?php

// É possível adicionar tipos nos argumentos e no retorno de uma função

function sum(int $a, int $b) {
  return $a + $b;
}

var_dump(sum(2, 3)); // int(5)
var_dump(sum(2, 3.5)); // int(5)

function sum2($a, $b): int {
  return $a + $b;
}

var_dump(sum(2, 3)); // int(5)
var_dump(sum(2, 3.5)); // int(5)