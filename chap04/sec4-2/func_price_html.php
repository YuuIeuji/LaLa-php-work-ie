<?php
function price($tanka, $kosu) {
  $souryo = 250;
  $ryokin = $tanka * $kosu;
  if ($ryokin < 5000) {
    $ryokin += $souryo;
  }
  return $ryokin;
}
?>
<?php
$kingaku1 = price(2400, 2);
$kingaku2 = price(1200, 5);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <header>
    <h1>料金計算</h1>
  </header>
  <main>
    <section>
      <p>2400円を2個購入した場合の金額は<?= $kingaku1 ?>円</p>
      <p>1200円を5個購入した場合の金額は<?= $kingaku2 ?>円</p>
    </section>
  </main>
  <footer>
    <small>&copy; 2023 Seiichi Nukayama</small>
  </footer>
</body>
</html>
