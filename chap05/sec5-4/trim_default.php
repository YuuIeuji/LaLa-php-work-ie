<?php
$msg = "     \tHello     World!!     \n\n";
$result = trim($msg);
echo "処理前：<br>" . PHP_EOL;
echo "[{$msg}]<br>" . PHP_EOL;
echo "処理後：<br>" . PHP_EOL;
echo "[{$result}]<br>" . PHP_EOL;

/********************************
処理前：
[ Hello World!! ]
処理後：
[Hello World!!]
********************************/

/*****************************
処理前：<br>
[	Hello World!!     

]<br>
処理後：<br>
[Hello World!!]<br>
********************************/
