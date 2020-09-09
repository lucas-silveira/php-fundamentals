<?php

$rates = [5.8, 7.3, 9.8, 6.7];

$final_rates = array_map("round", $rates);
print_r($final_rates);
// Array
// (
//     [0] => 6
//     [1] => 7
//     [2] => 10
//     [3] => 7
// )

function get_approveds($rate) {
  return $rate > 7;
}

$approveds_only = array_filter($rates, "get_approveds");
print_r($approveds_only);
// Array
// (
//     [1] => 7.3
//     [2] => 9.8
// )
