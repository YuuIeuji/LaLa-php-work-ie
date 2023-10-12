<?php
// 引数の合計を返す
function mysum(...$number) {
  $gokei = 0;
  for ($i=0; $i < count($number); $i++) {
    $gokei = $gokei + $number[$i];
  }
  return $gokei;
}

echo mysum(3, 4, 6, 8);  // 21
