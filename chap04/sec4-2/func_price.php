<?php
function price($tanka, $kosu) {
  $souryo = 250;
  $ryokin = $tanka * $kosu;
  if ($ryokin < 5000) {
    $ryokin += $souryo;
  }
  return $ryokin;
}
$kingaku1 = price(2400, 2);
$kingaku2 = price(1200, 5);
echo "金額1は{$kingaku1}円" . "<br>" . PHP_EOL;
echo "金額2は{$kingaku2}円";
