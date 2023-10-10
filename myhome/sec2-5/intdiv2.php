<?php
try {
  echo intdiv(2, 0);
} catch (DivisionByZeroError $e) {
  echo "例外キャッチ", PHP_EOL;
}

try {
  echo (2 / 0);
} catch (DivisionByZeroError $e) {
  echo "例外キャッチ", PHP_EOL;
}
