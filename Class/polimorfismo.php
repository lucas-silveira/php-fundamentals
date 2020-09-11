<?php

abstract class Food {
  public $weight;
}

// Rice = Arroz
class Rice extends Food {}

// Bean = Feijão
class Bean extends Food {}

// Ice cream = Sorvete
class IceCream extends Food {}

class Person {
  public $weight;

  function __construct($weight) {
    $this->weight = $weight;
  }

  public function eat(Rice $food) {
    $this->weight += $food->weight;
  }
}

$rice = new Rice();
$rice->weight = 0.45;
$ice_cream = new IceCream();
$ice_cream->weight = 0.8;

$person = new Person(83.45);
$person->eat($rice);

print($person->weight); // 83.9

// $person->eat($ice_cream); -> error of argument type