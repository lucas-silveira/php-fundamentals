<?php

class AgeRangeExcepetion extends Exception {
  public function __construct($message, $code = 0, $previous = null) {
    print("Erro personalizado\n");
    parent::__construct($message, $code, $previous);
  }
}

function get_retirement_time($age) {
  if ($age < 18) {
    throw new AgeRangeExcepetion('Ainda está muito longe.');
  }

  if ($age > 70) {
    throw new AgeRangeExcepetion('Já deveria estar aposentado.');
  }

  return 70 - $age;
}

$ages_evaluated = [15, 30, 60, 80];

foreach ($ages_evaluated as $age) {
  try {
    $left_time = get_retirement_time($age);
    print("Idade: $age, $left_time anos restantes para aposentar\n");
  } catch (AgeRangeExcepetion $err) {
    print("Não foi possível calcular para $age anos.\n");
    print("Motivo: {$err->getMessage()}\n");
  }
}