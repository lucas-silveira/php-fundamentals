<?php namespace TwoNamespace;

require('namespace.php');

use const OneNamespace\CONSTANT;

var_dump(CONSTANT); // int(123)

use OneNamespace as one_namespace;

var_dump(one_namespace\sum(1, 2)); // int(3)

use function OneNamespace\sum;

var_dump(sum(2, 2)); // int(4)

use function OneNamespace\sum as one_sum;

var_dump(one_sum(3, 2)); // int(5)

$a = new \OneNamespace\A();

var_dump($a->func()); // string(54) "OneNamespace -> OneNamespace\A -> OneNamespace\A::func"