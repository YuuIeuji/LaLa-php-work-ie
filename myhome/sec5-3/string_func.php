<?php

$text = "ハローワールド";
echo mb_strlen($text), "<br>", PHP_EOL;

$text = "吾輩は猫である。名前はまだない。";
echo mb_substr($text, 4, 10), "<br>", PHP_EOL;
