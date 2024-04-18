<?php
$numList = [1008, 1234, 1301];
$numbers = [1301, 1206, 1008, 1214];
function checkNumber($no) {
  global $numbers;
  if (in_array($no, $numbers)) {
    echo "{$no}番は合格です。";
  } else {
    echo "{$no}番は見つかりません。";
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ol>
  <?php
  foreach ($numList as $value) {
    echo "<li>", checkNumber($value), "</li>", PHP_EOL;
  }
  ?>
  </ol>
</body>
</html>