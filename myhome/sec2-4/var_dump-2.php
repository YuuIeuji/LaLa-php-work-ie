<?php
function pre_dump($var)
{
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
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
  $msg = "おはよう";
  $colors = array("red", "blue", "green");
  $now = new DateTime();
  $tokuten = 45;
  $isPass = ($tokuten > 80);
  $userName;

  pre_dump($msg);
  pre_dump($colors);
  pre_dump($now);
  pre_dump($tokuten);
  pre_dump($isPass);
  pre_dump($userName);
  ?>

</body>

</html>