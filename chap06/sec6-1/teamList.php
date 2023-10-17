<?php
$teamA = array("赤井一郎", "伊藤五郎", "上野神事");
$teamB = array("江藤さちよ", "小野友葵子");

function teamList($teamname, $namelist) {
  echo "{$teamname}", PHP_EOL;
  echo "<ol>", PHP_EOL;
  for ($i=0; $i<count($namelist); $i++) {
    echo "<li>", $namelist[$i], "</li>", PHP_EOL;
  }
  echo "</ol>", PHP_EOL;
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
  teamList('Aチーム', $teamA);
  teamList('Bチーム', $teamB);
  ?>
</body>
</html>