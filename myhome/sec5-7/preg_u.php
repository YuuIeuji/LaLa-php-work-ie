<?php

$subject = '漢字abcdひらがな한글Кириллица';

$patterns = array(

  '/\w+/',

  '/\w+/u',

  '/[a-z]+/',

  '/[a-z]+/u',

  '/[あ-ん]+/',

  '/[あ-ん]+/u'

);

$v = phpversion();

echo "PHP: {$v}<br>", PHP_EOL;

echo "検索対象: {$subject}<br>\n<br>\n";

foreach ($patterns as $pattern) {

  echo "{$pattern}: ";

  preg_match($pattern, $subject, $matches);

  print_r($matches[0]);

  echo '<br>', PHP_EOL;

}

// 【PHP】preg系で日本語を使う場合、パターン修飾子『u』は不可欠
// https://sutara-lumpur.hatenadiary.org/entry/20100904/1283565264

// 修正時刻: Thu 2023/10/12 04:44:40
