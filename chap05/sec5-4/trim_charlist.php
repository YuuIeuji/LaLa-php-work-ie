<?php
$msg = "　東京都千代田区　\n\n";
// 全角空白を半角空白にして、
$result = trim(mb_convert_kana($msg, "s"));
echo "処理前：<br>" . PHP_EOL;
echo "[{$msg}]<br>" . PHP_EOL;
echo "処理後：<br>" . PHP_EOL;
echo "[{$result}]<br>" . PHP_EOL;
