<?php

// o modificador final impede que uma classe/método seja extendida/modificado
final class Unique {}

// class Something extends Unique {} -> erro

abstract class Abstrata {
  public abstract function method1();

  public final function method2() {
    return 'Método fixo';
  }
}

class Something2 extends Abstrata {
  public function method1() {
    return 'Método 1';
  }

  // public function method2() {
  //   return 'implementando método...';
  // } -> erro
}