<?php
$tax = 0.1;

function taxPrice($tanka, $kosu, $tax) {
  $ryoukin = $tanka * $kosu * (1+$tax);
  echo "{$ryoukin}円です。";
}

taxPrice(tanka:250, kosu:4, tax:$tax);
echo "税込み" . $tax*100 . "%";
