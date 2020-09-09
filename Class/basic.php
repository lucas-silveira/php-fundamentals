<?php

class Client {
  public $name = 'Anônimo';
  public $age = 20;

  public function sayHello() {
    return "Olá. Sou o {$this->name}!";
  }
}

$client1 = new Client();
print($client1->sayHello()); // Olá. Sou o Anônimo!
print("\n");
$client2 = new Client();
$client2->name = 'John';
print($client2->sayHello()); // Olá. Sou o John!
print("\n");
$client3 = new Client;
$client3->name = 'Peter';
$client3->age = 21;
print($client3->sayHello()); // Olá. Sou o Peter!