<?php
$kuji = mt_rand(1, 6);
switch ($kuji) {
  case "1":
    $kekka = "大吉";
    $k = "大当たり";
    break;
  case "2":
    $kekka = "中吉";
    break;
  case "3":
    $kekka = "小吉";
    break;
  default:
    $kekka = "凶";
  }
echo $kekka;