<?php

for ($i = 0; $i < 10; $i++) {
  print($i);
}
print(PHP_EOL);

$numbers = [1, 2, 3, 4];

for ($i = 0; $i < count($numbers); $i++) {
  print($numbers[$i] * 2);
  print(PHP_EOL);
}