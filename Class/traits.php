<?php

// Os traits são usados para compor classes
trait validation {
  public function validate_string($str) {
    return isset($str) && $str !== '';
  }
}

trait better_validation {
  public function better_validate_string($str) {
    return isset($str) && trim($str);
  }
}

class User {
  // aqui estamos "importanto" as funções das traits para dentro da classe User
  use validation, better_validation;
}

$user = new User();
var_dump($user->validate_string(' ')); // bool(true)
var_dump($user->better_validate_string(' ')); // bool(false)

// resolvendo conflitos

trait validation2 {
  public function validate_string($str) {
    return isset($str) && $str !== '';
  }
}

trait better_validation2 {
  public function validate_string($str) {
    return isset($str) && trim($str);
  }
}

class User2 {
  use validation2, better_validation2 {
    // declarando explicitamente qual método importar
    better_validation2::validate_string insteadOf validation2;

    // podemos ainda atribuir um alias ao método que foi substituido para poder usá-lo
    validation2::validate_string as simple_validate_string;
  }
}

$user = new User2();
var_dump($user->validate_string(' ')); // bool(false)
var_dump($user->simple_validate_string(' ')); // bool(true)