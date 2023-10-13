<?php
$pattern = "/2013([A-F])-(..)/";
// $pattern = "/2013[A-F]-../";
$subject = "2012A-sx, 2013F-fx, 2013G-fx, 2013A-dx, 2015a-sx";
$result = preg_match_all($pattern, $subject, $matches);

echo '$result: ', $result, "<br>\n";
echo '<pre>';
var_dump($matches);
echo '</pre>';

if ($result = false) {
  echo "エラー:", preg_last_error();
} else if ($result === 0) {
  echo "マッチした形式はありません。";
} else {
  $all = implode(", ", $matches[0]);
  $model = implode(", ", $matches[1]);
  $type = implode(", ", $matches[2]);
  echo "見つかった形式: {$all}<br>", PHP_EOL;
  echo "モデル: {$model}<br>", PHP_EOL;
  echo "タイプ: {$type}<br>", PHP_EOL;
}
