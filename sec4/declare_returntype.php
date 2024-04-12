<?php
// declare(strict_types=1);

function twice(float $var): int {
  $var *= 2;
  var_dump($var);
  return $var;
}

$num = 10.8;
$result = twice($num);
var_dump($result);
echo "{$num}の２倍は", $result;
// 10.8の２倍は20