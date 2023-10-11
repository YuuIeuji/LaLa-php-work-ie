<?php
$kuji = mt_rand(1, 6);
$kekka = match ($kuji) {
  1 => "大吉",
  2 => "中吉",
  3 => "小吉",
  default => "凶",
};
echo $kekka;