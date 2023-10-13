<?php
$text = "たぶん42-49でした";
$pattern = "/4[6-9]-49u";

$result = preg_match($pattern, $text);

// 文法エラーも含めてチェック
if ($result === 1) {
  echo "マッチしました。";
} else if ($result === 0){
  echo "マッチしませんでした。";
} else {
  echo "エラーです。";
}


echo "<br>\n";

// 単なる正規表現チェック(これでよい)
if ($result) {
  echo "2:マッチしました。";
} else {
  echo "2:マッチしませんでした。";
}



// 修正時刻: Fri 2023/10/13 16:29:35
