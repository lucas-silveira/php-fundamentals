<?php

namespace App;

print(__NAMESPACE__); // App
print(PHP_EOL);

const CONSTANT = 123;

// Os sub-namespaces não precisam estar dentro do mesmo módulo que o namespace pai
namespace App\Principal;

print(__NAMESPACE__); // App\Principal
print(PHP_EOL);

const CONSTANT = 456;

namespace App\Principal\Specific;

print(__NAMESPACE__); // App\Specific
print(PHP_EOL);

const CONSTANT = 789;

var_dump(
  CONSTANT,
  \App\Principal\CONSTANT,
  \App\CONSTANT
);
// int(789)
// int(456)
// int(123)