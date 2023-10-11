<?php
$a = 9;
$b = 4;
try {
  $c = intdiv($a, $b);
  $ans = $c;
} catch (DivisionByZeroError $e) {
  $ans = "0で割るのは無理";
}
echo $ans, PHP_EOL;
