<?php

$format1 = 'D, d \d\e M \d\e Y';
$format2 = '%A, %d de %B de %Y';

$now = new DateTime();

print_r($now);
// (
//   [date] => 2020-09-15 22:05:13.901015
//   [timezone_type] => 3
//   [timezone] => America/Sao_Paulo
// )

print($now->format($format1)); // Tue, 15 de Sep de 2020
print(PHP_EOL);

setlocale(LC_TIME, 'pt_BR.utf-8');
print(strftime($format2, $now->getTimestamp())); // terça, 15 de setembro de 2020
print(PHP_EOL);

$tomorrow = new DateTime('+1 day');
print(strftime($format2, $tomorrow->getTimestamp())); // quarta, 16 de setembro de 2020
print(PHP_EOL);

$date = new DateTime('2020-01-25 15:30:50');
print(strftime($format2, $date->getTimestamp())); // sábado, 25 de janeiro de 2020
print(PHP_EOL);
$date->modify('+1 day');
print(strftime($format2, $date->getTimestamp())); // domingo, 26 de janeiro de 2020
print(PHP_EOL);
$date->setDate(2020, 5, 20);
print(strftime($format2, $date->getTimestamp())); // quarta, 20 de maio de 2020
print(PHP_EOL);

$oneDate = new DateTime('2020-05-17');
$otherDate = new DateTime('2020-05-18');
print($oneDate > $otherDate ? 'Maior' : 'Menor'); // Menor
print(PHP_EOL);

$tz = new DateTimeZone('America/Sao_Paulo');
$now = new DateTime(null, $tz);
print($now->format('d/m/Y H:i:s'));