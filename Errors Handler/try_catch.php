<?php

try {
  print(intdiv(7, 0));
} catch (Error $err) {
  print('Houve um erro.');
}

print(PHP_EOL);

try {
  throw new Exception("Erro bem estranho.\n");
  print(intdiv(7, 0));
} catch (DivisionByZeroError $err) {
  print("Divisão por zero\n");
} catch(Throwable $err) {
  print($err->getMessage());
} finally {
  print("Sempre executado");
}