<?php
$data = [
  "id" => "TR123",
  "商品名" => "ピークハント",
  "価格" => 14500,
];
echo "<ul>";
foreach ($data as $k => $v) {
  echo "<li> $k : $v </li>";
}
echo "</ul>";