<?php namespace OneNamespace;

const CONSTANT = 123;

function sum($a, $b) {
  return $a + $b;
}

class A {
  public $attr;

  function func() {
    return
      __NAMESPACE__ . ' -> '
      . __CLASS__ . ' -> '
      . __METHOD__;
  }
}