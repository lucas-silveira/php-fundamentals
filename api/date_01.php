<?php

print(time()); // 1600217325 -> Quantidade de segundos desde de janeiro de 1970
print(PHP_EOL);
print(date('D, d \d\e M \d\e Y')); // Tue, 15 de Sep de 2020
print(PHP_EOL);
print(strftime('%A, %d de %B de %Y', time())); // Tuesday, 15 de September de 2020
print(PHP_EOL);

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
print(strftime('%A, %d de %B de %Y', time())); // terça, 15 de setembro de 2020
print(PHP_EOL);

$tomorrow = time() + (24 * 60 * 60);
print(strftime('%A, %d de %B de %Y', $tomorrow)); // quarta, 16 de setembro de 2020
print(PHP_EOL);
$nextWeek = strtotime('+1 week');
print(strftime('%A, %d de %B de %Y', $nextWeek)); // terça, 22 de setembro de 2020
print(PHP_EOL);

$date = mktime(15, 30, 50, 1, 25, 2020);
print(strftime('%A, %d de %B de %Y - %H:%M:%S', $date)); // sábado, 25 de janeiro de 2020 - 15:30:50