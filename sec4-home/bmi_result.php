<?php
declare(strict_types=1);

function hantei(float $h, float $w) : string {
  echo '$h ', gettype($h);
  $bmi = $w / ($h/100 * $h/100);
  if ($bmi < 18.5) {
    $str = "やせ型";
  } else if ($bmi < 25.0) {
    $str = "普通";
  } else {
    $str = "肥満";
  }
  return $str;
}

$height = $_POST['height'];
echo '$height ', gettype($height);
$weight = $_POST['weight'];
$type = hantei($height, $weight);
echo $type;
?>
<p><a href="bmi_input.php">TOP</a> </p>

<!-- 修正時刻: Fri 2024/04/12 07:06:20 -->
