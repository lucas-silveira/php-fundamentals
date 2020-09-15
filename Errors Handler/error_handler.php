<?php

ini_set('display_errors', 1); // habilita a exibição dos erros

print(4 / 0);

error_reporting(E_ERROR); // Seta o nível de criticidade para exibição de erros
// Nesse caso, Warnings não serão exibidos pois possuem um nível de criticidade
// menor do que de Errors

print(4 / 0);

error_reporting(E_ALL);

print(4 / 0);

error_reporting(~E_ALL); // negação lógica (not)

print(4 / 0);

error_reporting(E_ALL);

print(4 / 0);

// filtrando mensagens de erros
function message_filter($n_err, $str_err) {
  $text = 'include';
  return !!stripos(" $str_err", $text);
}

set_error_handler('message_filter', E_WARNING);

print(4 / 0);
include('any_file.php');

restore_error_handler(); // Reseta o error handler

include('any_file.php');