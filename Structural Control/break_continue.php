<?php

$count = 0;
for (;;) {
  $count++;
  
  if ($count % 2 === 1)
    continue; // avança para a próxima iteração
  
  print($count);

  if ($count >= 20)
    break; // sai do loop
}

print("\nFim");