<?php

$file = fopen('test.txt', 'w'); // Abre o arquivo em modo de escrita;
// Se o arquivo não existir, ele é criado.
fwrite($file, "Valor inicial\n");
fwrite($file, "Segunda linha\n");
fclose($file);

// $file = fopen('test.txt', 'w');
// // Ao abrir um arquivo existente usando o parâmetro w, o seu conteúdo será apagado.
// fclose($file);

$file = fopen('test.txt', 'a'); // Modo append
fwrite($file, 'Novo conteúdo');
fwrite($file, ' adicionado em um segundo momento.');
fclose($file);

$file = fopen('test.txt', 'x'); // Nesse modo, se o arquivo existir, será gerado um erro.