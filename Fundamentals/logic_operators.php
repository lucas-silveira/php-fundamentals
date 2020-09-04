<?php

var_dump(true && true); // bool(true)
var_dump(true && false); // bool(false)
var_dump(false && true); // bool(false)
var_dump(false && false); // bool(false)
var_dump(true and true); // bool(true)
print(PHP_EOL);
var_dump(true || true); // bool(true)
var_dump(true || false); // bool(true)
var_dump(false || true); // bool(true)
var_dump(false || false); // bool(false)
var_dump(true or true); // bool(true)
print(PHP_EOL);
var_dump(true xor true); // bool(false)
var_dump(true xor false); // bool(true)
var_dump(false xor true); // bool(true)
var_dump(false xor false); // bool(false)
