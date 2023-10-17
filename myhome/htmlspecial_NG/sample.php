<?php
session_start();

function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}
function es(array|string $data, string $charset='UTF-8'):mixed {
  // $dataが配列のとき
  if (is_array($data)){
    // 再帰呼び出し
    return array_map(__METHOD__, $data);
  } else {
    // HTMLエスケープを行う
    return htmlspecialchars(string:$data, flags:ENT_QUOTES, encoding:$charset);
  }
}
$data = [
  'a' => '<script>alert("Virus発見!")</script>',
  'b' => '<script>alert(document.cookie)</script>',
];
$data = es($data);
echo "<pre>"; 
var_dump($data);
echo "</pre>";
?>
<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title></title>
  </head>
  <body>
    <h1>aaa</h1>
    <p><?php echo es($data['a']) ?></p>
    <p><?php echo es($data['b']) ?></p>
  </body>
</html>

<?php 
/* 修正時刻: Tue 2023/10/17 09:17:28 */
