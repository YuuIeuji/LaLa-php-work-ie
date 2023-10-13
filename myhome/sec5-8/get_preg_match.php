<?php
$subject = <<< 'EOD'
染谷将太 <shohta@gmail.com>
二階堂ふみ <fumi@yahoo.co.jp>
渡辺哲 <tetsu@gmail.com>
窪塚洋介 <yohsuke@kuboduka.com>
吉高由里子 <yuriko@yahoo.co.jp>
EOD;

$pattern = "/gmail/";

$result = preg_match($pattern, $subject, $matches);
// $result = preg_match_all($pattern, $subject, $matches);
if ($result) {
  foreach ($matches as $str) {
    echo $str, "<br>\n";
  }
}
