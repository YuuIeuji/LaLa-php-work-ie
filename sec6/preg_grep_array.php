<?php
$nameList = ['田中達也', '川崎兼一', '山田一郎', '杉山直樹'];
$pattern = "/田/";
$result = preg_grep($pattern, $nameList);
echo "該当" . count($result) . "件" . PHP_EOL;
foreach ($result as $value) {
  echo $value . PHP_EOL;
}
/*
該当2件 
田中達也
山田一郎
*/