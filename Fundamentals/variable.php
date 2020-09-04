<?php

  $number_a = 13;
  var_dump($number_a);

  $a = 3;
  $a = 'hello'; // tipagem fraca
  var_dump($a); // string(5) "hello"

  $b = 2;
  $c = 2;
  $sum = $b + $c;
  var_dump($sum); // int(6)

  var_dump(isset($sum)); // bool(true) -> verifica se a variável está setada
  unset($sum); // remove o valor da variável
  var_dump(isset($sum)); // bool(false)
  // var_dump($sum); // NULL

  $number_b = 1;
  $number_b++;
  ++$number_b;
  $number_b -= 1;
  var_dump($number_b); // int(2)

  $string = 'Hello';
  $string .= ' World!';
  var_dump($string); // string(12) "Hello World!"

  // Binary operator
  $value = $string ?? 'value default';
  var_dump($value); // string(12) "Hello World!"

  // Interpolation
  $number_c = 10;
  var_dump('Número: $number_c'); // string(18) "Número: $number_c"
  var_dump("Número: $number_c"); // string(11) "Número: 10"

  $object = 'caneta';
  var_dump("Há {$object}s"); // string(11) "Há canetas"

  // value x reference
  $value_a = 'valor a';
  $value_b = $value_a; // passagem por valor
  $value_b = 'novo valor';

  var_dump($value_a); // string(7) "valor a"
  var_dump($value_b); // string(10) "novo valor"

  $value_a = 'valor a';
  $value_b = &$value_a; // passagem por referência
  $value_b = 'novo valor';

  var_dump($value_a); // string(10) "novo valor"
  var_dump($value_b); // string(10) "novo valor"

  // constantes
  define('TAX_VALUE', 5.9);
  var_dump(TAX_VALUE); // float(5.9)
  // TAX_VALUE = 5; -> error

  const NEW_TAX = 2.5;

  var_dump(NEW_TAX); // float(2.5)
  var_dump(PHP_VERSION); // string(5) "7.4.3"

  print("Linha: " . __LINE__ . "\n"); // Linha: 67
  print(__FILE__ . "\n"); // /mnt/.../Documents/Arquivos/Projects/PHP/curso-php/Fundamentals/variable.php
  print(__DIR__ . "\n"); // /mnt/.../Documents/Arquivos/Projects/PHP/curso-php/Fundamentals
