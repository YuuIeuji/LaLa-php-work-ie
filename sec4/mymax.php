<?php
function myMax(...$numbers) {
  print_r($numbers);
}

myMax(10, 34, 5666, 21, -34);
/*
(
    [0] => 10
    [1] => 34
    [2] => 5666
    [3] => 21
    [4] => -34
)
(
    [0] => a
    [1] => db
    [2] => eeee
)
*/
