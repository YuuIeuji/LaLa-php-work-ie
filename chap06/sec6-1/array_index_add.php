<?php
$colors = array();
$colors[] = "赤";
$colors[] = "青";
$colors[] = "黃";
$colors[] = "白";

array_push($colors, "緑");
$a = $colors;  // コピー
$a[1] = "灰";
print_r($colors);
print_r($a);


