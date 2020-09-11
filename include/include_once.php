<?php

include_once('sum.php');
$sum = require_once('return.php');

var_dump(sum(1, 2)); // int(3)
var_dump($sum(1, 2)); // int(3)