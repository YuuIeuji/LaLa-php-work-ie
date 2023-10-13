<?php
$text = "たぶん48-49でした";
$pattern = "/4[6-9]-49/u";

if (preg_match($pattern, $text)) {
  echo "マッチしました。";
} else {
  echo "マッチしませんでした。";
}
