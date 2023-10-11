<?php
$fortune = ['大吉', '中吉', '小吉', '末吉', '凶'];

function kuji($array) {
  $num = mt_rand(0, 4);
  return $array[$num];
}

echo kuji($fortune);

// 修正時刻: Thu 2023/10/12 06:54:42
