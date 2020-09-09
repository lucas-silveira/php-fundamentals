<?php

function isPalindromo($word) {
  $lastIndex = strlen($word) - 1;

  for ($i = 0; $i <= $lastIndex; $i++) {
    if ($word[$i] !== $word[$lastIndex - $i]) return "Não";
  }

  return "É um palíndromo";
}

print(isPalindromo("arara")); // É um palíndromo
print(PHP_EOL);

function isPalindromo2($word) {
  return $word === strrev($word); // reverte a string
}

var_dump(isPalindromo2("arara")); // bool(true)