<?php
$a = 13;
$b = 0;
// $c = intdiv($a, $b);
// $c = $a / $b;

try {
  // $c = intdiv($a, $b);
  $c = $a / $b;
  echo $c;
} catch (DivisionByZeroError $e) {
  echo "無理";
}
