<?php
function twice(int $var) {
  $var *= 2;
  return $var;
}

$num = 10;
$result = twice($num);
echo "{$num}の2倍は ", $result;