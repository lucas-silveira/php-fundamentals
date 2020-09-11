<?php

interface IAnimal {
  function eat(): string;
}

interface ICanino {
  function bark(): string; // bark = latir
}

// Uma interface pode extender outra (ou múltiplas) interface
interface IBird extends IAnimal {
  function fly(): string;
}

// Em PHP, uma classe pode implementar múltiplas interfaces
class Dog implements IAnimal, ICanino {
  public function eat(): string {
    return "comendo...";
  }

  public function bark(): string {
    return "au au";
  }
}

$dog = new Dog();
print($dog->eat());
print($dog->bark());
print(PHP_EOL);

var_dump($dog instanceof Dog); // bool(true)
var_dump($dog instanceof IAnimal); // bool(true)