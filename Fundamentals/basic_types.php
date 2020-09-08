<?php
// Boolean
print(true); // 1
print("\n");
print(false); // empty
var_dump(false); // bool(false)

// Integer
print(10); // int
print(PHP_EOL); // new line
var_dump(10); // int(10)
echo 011; // octal -> 9
print("\n");
print(0b11); // binary -> 3
print("\n");
print(0x11); // hexadecimal -> 17
print("\n");

// Float
var_dump(1.1); // float(1.1)
var_dump(1.0); // float(1)
print(1.2e3); // 1.2 * 1000 = 1200
print("\n");
print(1200e-3); // 1200 * 0.001 = 1.2
print("\n");

// String
print("Hello world"); // string
print("\n");
print("Hello" . " World"); // Hello World
print("\n");
print(strtoupper('caixa alta')); // CAIXA ALTA
print("\n");
print(strtolower('CAIXA BAIXA')); // caixa baixa
print("\n");
print(ucfirst('primeira letra maiúscula')); // Primeira letra maiúscula
print("\n");
print(ucwords('primeira letra de cada palavra maiúscula')); // Primeira Letra De Cada Palavra Maiúscula
print("\n");
print(strlen('quantidade de strings i')); // 23
print("\n");
print(mb_strlen('quantidade de strings í')); // 23 -> mb_strlen não conta o acento como string
print("\n");
print(substr('Só uma parte mesmo', 8, 6)); // parte
print("\n");
print(str_replace('isso', 'aquilo', 'Trocar isso')); // Trocar aquilo