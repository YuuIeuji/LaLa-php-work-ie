<?php
$myArray = ["a", "b", "c", "d", "e"];
print_r($myArray);
echo "<br>\n";
$removed = array_splice($myArray, 1, 0);
print_r($myArray);
echo "<br>\n";
print_r($removed);
