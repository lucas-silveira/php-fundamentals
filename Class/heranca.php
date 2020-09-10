<?php

class Person {
  public $name;
  public $age;

  function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  function __destruct() {
    print("Fim do objeto\n");
  }

  public function sayHello() {
    return "{$this->name}, {$this->age} anos";
  }

  public function sayBye() {
    return 'Bye!';
  }
}

class User extends Person {
  public $login;

  function __construct($name, $age, $login) {
    parent::__construct($name, $age);
    $this->login = $login;
  }

  // sobrescrever método herdado
  public function sayHello() {
    $helloParent = parent::sayHello();
    return "{$this->login}: $helloParent";
  }
}

$user = new User("John", 20, 'john20');
print($user->sayHello());
print(PHP_EOL);
print($user->sayBye());
print(PHP_EOL);