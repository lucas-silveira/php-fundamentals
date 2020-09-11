<?php

// Métodos mágicos são os métodos disponíveis por padrão em todas as classes
// Eles começam com __ (dois underlines) no ínicio do nome

class Person {
  public $name;
  public $age;

  function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  function __destruct() {
    print("\nFim do objeto!");
  }

  public function __toString() {
    return "{$this->name} tem {$this->age} anos.";
  }

  public function greeting() {
    return $this;
  }

  public function __get($attr) {
    return "Lendo atributo não declarado: \"$attr\"";
  }

  public function __set($attr, $value) {
    print("Alterando o atributo não declarado: $attr/$value");
  }

  public function __call($method, $params) {
    print("Tentando executar o método não declarado: \"$method\"\ncom os parâmetros:\n");
    print_r($params);
  }
}

$person = new Person('John', 20);
print($person->greeting()); // John tem 20 anos.
print("\n");
print($person); // John tem 20 anos.
print("\n");
print($person->something); // Lendo atributo não declarado: something
print("\n");
$person->something = 'new value'; // Alterando o atributo não declarado: something/new value
print("\n");
$person->something(1, 2);
// Tentando executar o método não declarado: something
//     com os parâmetros:Array
// (
  //     [0] => 1
  //     [1] => 2
  // )
print("\n");