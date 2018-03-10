<?php

function series_sum($n) {
  $total = 0; // initialize the value to store our total sum.
  for ($i = 0; $i < $n ; $i++){
    $total += 1 / (1 + 3*$i); // 1 + 1/4 + 1/10 and so on...
  }
  return (string) number_format($total, 2, '.', ''); // sets the decimal places to 2 and converts the value to string.
}

/*
Task:

Your task is to write a function which returns the sum of following series upto nth term(parameter).

Series: 1 + 1/4 + 1/7 + 1/10 + 1/13 + 1/16 +...

Rules:

    You need to round the answer to 2 decimal places and return it as String.

    If the given value is 0 then it should return 0.00

    You will only be given Natural Numbers as arguments.

Examples:

SeriesSum(1) => 1 = "1.00"
SeriesSum(2) => 1 + 1/4 = "1.25"
SeriesSum(5) => 1 + 1/4 + 1/7 + 1/10 + 1/13 = "1.57"
*/

/*

Time: 269ms Passed: 3 Failed: 0 

*/

?>
