<?php

var_dump(1 == 2); // bool(false)
var_dump(1 != 2); // bool(true)
var_dump(1 > 2); // bool(false)
var_dump(1 < 2); // bool(true)
var_dump(1 >= 2); // bool(false)
var_dump(1 <= 2); // bool(true)
print(PHP_EOL);
var_dump(1 == '1'); // bool(true)
var_dump(1 === '1'); // bool(false)
var_dump(1 != '1'); // bool(false)
var_dump(1 !== '1'); // bool(true)
print(PHP_EOL);
var_dump(!!1); // bool(true)
var_dump(!!0); // bool(false)
var_dump(!!""); // bool(false)
var_dump(!!" "); // bool(true)
print(PHP_EOL);
// Spaceship
var_dump(5 <=> 3); // int(1)
var_dump(5 <=> 5); // int(0)
var_dump(3 <=> 5); // int(-1)
