<?php
function warikan($total, $ninzu) {
  if ($ninzu <= 0) {
    echo "無理<br>" . PHP_EOL;
    return;
  }
  $result = $total / $ninzu;
  echo "{$total}円を {$ninzu}で分けると {$result}円。";
  echo "<br>" . PHP_EOL;
}
?>
<html><body>
<?php
warikan(2500, 2);
warikan(3000, 0);
warikan(5500, 4);
?>
</body></html>