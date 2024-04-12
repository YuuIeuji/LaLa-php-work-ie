<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <section>

    <?php
    $version = 8;
    $msg = <<< WAHAHA
        <h1>PHP $version</h1>
        <form action="" method="post">
          <input type="text" name="name">
          <input type="submit" value="send">
        </form>
        WAHAHA;

    echo $msg;
    ?>
  </section>
</body>

</html>