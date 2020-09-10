<?php

class Person {
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function __destruct() {
    print("Fim do objeto\n");
  }

  public function sayHello() {
    return "Olá. Sou o {$this->name}!";
  }
}

$person = new Person('Peter Park', 20);
print($person->sayHello()); // Olá. Sou o Peter Park!