<?php
/**
 * $h -- 身長(cm)
 * $w -- 体重(kg)
 */
function hantei($h, $w) {
  $h = $h / 100;
  $bmi = $w / ($h * $h);

  if ($bmi < 18.5) {
    $type = "やせ型";
  } else if ($bmi < 25.0) {
    $type = "普通";
  } else {
    $type = "肥満";
  }
  return [$bmi, $type];
}

$height = $_POST['height'];
$weight = $_POST['weight'];

$result = hantei(h:$height, w:$weight);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>あなたのBMI指数は <?= $result[0] ?>です。</p>
  <p>あなたは<?= $result[1]; ?>です。</p>
  <p><a href="bmi_input.php">modoru</a></p>
</body>
</html>

<?php
