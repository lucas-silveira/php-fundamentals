<?php

namespace ContextName;

print(__NAMESPACE__); // ContextName
print(PHP_EOL);

const CONSTANT1 = 123;
define(__NAMESPACE__ . '\CONSTANTE2', 456);

var_dump(CONSTANT1, CONSTANTE2);
// int(123)
// int(456)

function sum($a, $b) {
  return $a + $b;
}

var_dump(sum(1, 2)); // int(3)
var_dump(\ContextName\sum(2,2)); // int(4)