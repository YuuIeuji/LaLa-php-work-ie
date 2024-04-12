<?php
// declare(strict_types=1);

function twice(int $var) {
  // 暗黙の型変換
  var_dump($var);
  $var *= 2;
  return $var;
}

$num = 10.8;
var_dump($num);
$result = twice($num);
echo "{$num}の２倍は", $result;
// 10.8の２倍は20