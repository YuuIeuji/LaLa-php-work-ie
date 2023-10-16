<?php
$msg = "東京<->京都 'Eat & Run' ツアー";
// $msg = "<script>alert('ウィルス発見!')</script>";
// $msg = "<textarea></textarea>";
// echo $msg;
echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
// 東京&lt;-&gt;京都 &#039;Eat &amp; Run&#039; ツアー
// &lt;script&gt;alert(&#039;ウィルス発見!&#039;)&lt;/script&gt;