<?php

// Em PHP, para termos acesso a variáveis que está no escopo pai de uma função,
// devemos usar a palavra reservada "global"

$variable = 1;

function change_value() {
  $variable = 2;
}

var_dump($variable); // int(1)
change_value();
var_dump($variable); // int(1)

function change_value2() {
  global $variable;
  $variable = 2;
}

var_dump($variable); // int(1)
change_value2();
var_dump($variable); // int(2)