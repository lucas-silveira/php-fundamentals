<?php

class Math {
  static function sum($a, $b) {
    return $a + $b;
  }

  static function sum_and_multiply_by_two($a, $b) {
    $total = self::sum($a, $b);
    return $total * 2;
  }
}

print(Math::sum(2, 3)); //5
print(PHP_EOL);
print(Math::sum_and_multiply_by_two(2, 3)); //10