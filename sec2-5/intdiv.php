<?php
$a = 9;
$b = 4;
try {
  $c = intdiv($a, $b);
  $kotae = $c;
} catch (DivisionByZeroError $e) {
  $kotae = "0で割るのは無理";
}
echo $kotae, PHP_EOL;
