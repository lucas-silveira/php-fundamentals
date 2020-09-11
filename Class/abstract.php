<?php

abstract class Animal {
  public abstract function eat(): string;

  public function drink(): string {
    return 'bebendo...';
  }
}

// classes abstratas podem extender outras classes abstratas
abstract class Canino extends Animal {
  public function bark(): string {
    return 'au au';
  }
}

class Dog extends Canino {
  public function eat(): string {
    return 'comendo...';
  }
}

$dog = new Dog();
print($dog->eat());
print(PHP_EOL);
print($dog->drink());
print(PHP_EOL);
print($dog->bark());