<?php
$data = ['赤井一郎', '伊藤 淳', '上野神事'];
$glue = "さん、";
$nameStr = implode($glue, $data);
$nameStr = $nameStr . "さん";
echo($nameStr);
// 赤井一郎さん、伊藤 淳さん、上野神事さん