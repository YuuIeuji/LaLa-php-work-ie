<?php
$height = $_POST['height'];
$weight = $_POST['weight'];
$bmi = $weight / ($height/100 * $height/100);
if ($bmi < 18.5) {
  $str = "やせ型";
} else if ($bmi < 25.0) {
  $str = "普通";
} else {
  $str = "肥満";
}
echo $bmi, "<br>", PHP_EOL;
echo $str;
?>

<!-- 修正時刻: Thu 2024/04/11 18:24:46 -->
