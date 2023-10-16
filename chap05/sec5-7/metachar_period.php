<?php
$pattern = "/^山/u";
if (preg_match($pattern, "藤田商店,山崎商店")) {
  echo "match!";
} else {
  echo "NO match!";
}