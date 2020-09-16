<?php

$file = fopen('test.txt', 'r'); // Modo de leitura (stream)
print(fread($file, 13)); // Valor inicial -> Binary-safe file read (arquivo, n de bytes)
print(fread($file, 10)); // Segunda l -> Binary-safe file read (arquivo, n de bytes)
fclose($file);
print(PHP_EOL);

$file = fopen('test.txt', 'r');
$filesize = filesize('test.txt');
print($filesize); // 76
print(PHP_EOL);
print(fread($file, $filesize)); // Novo conteúdo adicionado em um segundo momento.
fclose($file);
print(PHP_EOL);

$file = fopen('test.txt', 'r');
// Retorna a próxima linha do stream
print(fgets($file)); // Valor inicial
print(fgets($file)); // Segunda linha
print(fgets($file)); // Novo conteúdo adicionado em um segundo momento.
print(fgets($file)); // Se não houver mais linhas, ele retornará false
fclose($file);
print(PHP_EOL);

$file = fopen('test.txt', 'r');
// Verifica se já chegamos ao final do arquivo
while(!feof($file)) {
  print(fgets($file));
}
fclose($file);
print(PHP_EOL);

$file = fopen('test.txt', 'r+'); // Modo de leitura e escrita
print(fgets($file));
print(fgets($file));
print(fgets($file));
fwrite($file, "\nAdicionado durante a leitura");
fclose($file);