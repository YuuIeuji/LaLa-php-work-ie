<?php
function double(&$num) {
  $num[0] = $num[0] * 2;
  $num[1] = $num[1] * 2;
  $num[2] = $num[2] * 2;
  print_r($num);
}

$num = [1, 3, 5];
double($num);
print_r ($num);


// 修正時刻: Fri 2023/10/13 07:46:38
