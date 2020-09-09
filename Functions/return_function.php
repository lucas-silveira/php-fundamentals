<?php

function sum($a) {
  return function($b) use($a) {
    return $a + $b;
  };
}

var_dump(sum(2)(3)); // int(5)