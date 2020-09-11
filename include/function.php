<?php

print("Arquivo function.php\n");

function loadFile() {
  include('sum.php');

  var_dump($variable, sum(1, 2));
}

loadFile();
var_dump(sum(1, 2));
// Ao contrário da variável, a função continua existindo após o fechamento do escopo