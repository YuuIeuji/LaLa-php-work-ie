<pre>
<?php
for ($i=0; $i<=3; $i++) {
  for ($j=0; $j<=5; $j++) {
    echo "{$i}-{$j} | ";
    if ($i === 3 && $j === 3) break;
  }
  echo PHP_EOL;
}
?>
</pre>
<!--
0-0 | 0-1 | 0-2 | 0-3 | 0-4 | 0-5 | 
1-0 | 1-1 | 1-2 | 1-3 | 1-4 | 1-5 | 
2-0 | 2-1 | 2-2 | 2-3 | 2-4 | 2-5 | 
3-0 | 3-1 | 3-2 | 3-3 | 3-4 | 3-5 | 
-->