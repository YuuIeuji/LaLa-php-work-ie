<?php
$pattern = "/[^青赤]木/u";
if (preg_match($pattern, "赤木、白木")) {
  echo "マッチしました。";
} else {
  echo "マッチしません。";
}