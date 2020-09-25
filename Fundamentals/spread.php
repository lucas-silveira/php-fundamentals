<?php

$array = [1, 2, 3];
[$a, $b, $c] = $array;

echo $a . PHP_EOL;
echo $b . PHP_EOL;
echo $c . PHP_EOL;

$array2 = ['index1'=>'a', 'index2'=>'b'];

['index1'=>$a, 'index2'=>$b] = $array2;

echo $a . PHP_EOL;
echo $b . PHP_EOL;