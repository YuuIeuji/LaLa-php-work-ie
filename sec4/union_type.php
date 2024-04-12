<?php
// declare(strict_types=1);

function twice(string|float $var): float {
  $var *= 2;
  return $var;
}

$num1 = "1.9cm";
$num2 = 2.6;
$result1 = twice($num1);
$result2 = twice($num2);
echo "{$num1}の２倍は", $result1, "<br>", PHP_EOL;
echo "{$num2}の２倍は", $result2;
// 1.9cmの２倍は3.8
// 2.6の２倍は5.2