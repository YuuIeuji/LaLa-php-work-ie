<?php
// 定数にした方が安全
const TAX = 0.1;

function taxPrice($tanka, $kosu) {
  $ryokin = $tanka * $kosu * (1+TAX);
  echo "{$ryokin}円です。";
}

taxPrice(tanka:250, kosu:4);
echo "税込み" . $tax*100 . "%";
