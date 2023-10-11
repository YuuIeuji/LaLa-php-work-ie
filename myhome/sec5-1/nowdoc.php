<?php
$a = "Wahaha";

$msg = <<< 'EOD'
  <html>
    <body>
      <h1>aaa</h1>
      {$a}
    </body>
  </html>
EOD;

echo $msg;
