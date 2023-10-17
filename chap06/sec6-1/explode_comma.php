<?php
$data = "赤井一郎,伊藤　淳,上野神事";
$delimiter = ",";
$nameList = explode($delimiter, $data);
print_r($nameList);
