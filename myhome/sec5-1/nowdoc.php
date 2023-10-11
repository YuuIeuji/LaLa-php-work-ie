<?php
$msg = <<< 'EOD'
  <?php
  $a = "Wahaha";
  echo $a;
  ?>
  <html>
    <body>
      <h1>aaa</h1>
      <?php echo $a ?>
    </body>
  </html>
EOD;

echo $msg;
