<?php
$numList = [1008, 1234, 1301];
$numbers = [1301, 1205, 1008, 1214];

function checkNumber($no) {
  global $numbers;
  if (in_array($no, $numbers)) {
    return "{$no}番は合格です。";
  } else {
    return "{$no}番は見つかりません。";
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
  <?php
  echo "<ol>";
  foreach ($numList as $value) {
    echo "<li>", checkNumber($value), "</li>";
  }
  echo "</ol>";
  ?>
</body>
</html>