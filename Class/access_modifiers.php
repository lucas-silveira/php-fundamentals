<?php

class A {
  public $public = 'Público';
  protected $protected = 'Protegido';
  private $private = 'Privado';

  public function getAttrs() {
    print("{$this->only_A()}\n");
    return "a) Público = {$this->public}\nb) Protegido = {$this->protected}\nc) Privado = {$this->private}";
  }

  protected function only_A_and_sub_classes() {
    return "Apenas a classe A e subclasses possuem acesso.";
  }

  private function only_A() {
    return "Apenas a classe A possui acesso.";
  }
}

class B extends A {
  public function get_protected_method() {
    print(parent::only_A_and_sub_classes());
  }
}

$a = new A();
print($a->getAttrs());
// print($a->only_A_and_sub_classes()); -> erro
// print($a->only_A()); -> erro
print(PHP_EOL);

$b = new B();
$b->get_protected_method();