<?php
    $tanka = $_POST['tanka'];
    $kosu = $_POST['kosu'];
    $price = $tanka * $kosu;
    $tanka = number_format($tanka);
    $price = number_format($price);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/style.css">
  <style>
    .price { color: red; }
  </style>
</head>
<body>
  <div>
    <?php
    echo "<p class=\"price\">単価円{$tanka} ✕ {$kosu}個は {$price}円です。</p>";
    ?>
  </div>
</body>
</html>