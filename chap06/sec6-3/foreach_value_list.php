<?php
$namelist = ["赤井一郎", "伊藤五郎", "上野神事"];
echo "<ol>", PHP_EOL;
foreach ($namelist as $value) {
  echo "<li>", $value, "さん</li>", PHP_EOL;
} 
echo "</ol>", PHP_EOL;





for ($i=0; $i<count($namelist); $i++) {
  echo "<li>", $namelist[$i], "さん</li>", PHP_EOL;
}
