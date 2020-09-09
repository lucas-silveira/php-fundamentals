<?php

function greeting($name = "Senhor(a)", $lastname = "Cliente") {
  return "Bem vindo, $name $lastname!";
}

var_dump(greeting()); // string(28) "Bem vindo, Senhor(a) Cliente!"
var_dump(greeting("Peter", "Park")); // string(21) "Bem vindo, Peter Park!"