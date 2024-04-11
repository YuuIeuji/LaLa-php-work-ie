<?php
function tsubo($sai) {
  if ($sai % 2 === 0) {
    return "丁";
  } else {
    return "半";
  }
}

function toba() {
  $me = mt_rand(2, 12);
  echo tsubo($me);
}

toba();
