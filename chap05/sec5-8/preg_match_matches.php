<?php
$pattern = "/^佐.+子$/mu";
// "佐和子", "佐藤静子", "佐和山円城子"
$subject = <<< "names"
非佐本あああ子ええええ
佐藤由木
塩田朋子
杉山薫
佐藤ゆう子
names;
$result = preg_match($pattern, $subject, $matches);
if ($result === false) {
  echo "エラー:", preg_last_error();
} if ($result == 0) {
  echo "マッチした値はありません";
} else {
  echo "「{$matches[0]}」が見つかりました。";
}
echo "<pre>";
var_dump($matches);
echo "</pre>";