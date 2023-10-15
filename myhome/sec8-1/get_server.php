<?php
$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : "";
$method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : "";
$time = isset($_SERVER['REQUEST_TIME']) ? date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']) : "";
$query = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : "";
$accept = isset($_SERVER['HTTP_ACCEPT']) ? $_SERVER['HTTP_ACCEPT'] : "";
$charset = isset($_SERVER['HTTP_ACCEPT_CHARSET']) ? $_SERVER['HTTP_ACCEPT_CHARSET'] : "";
$encoding = isset($_SERVER['HTTP_ACCEPT_ENCODING']) ? $_SERVER['HTTP_ACCEPT_ENCODING'] : "";
$language = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : "";
$connection = isset($_SERVER['HTTP_CONNECTION']) ? $_SERVER['HTTP_CONNECTION'] : "";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : "";
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "";
$useragent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "";
$addr = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : "";
?>
{
"status": "OK",
"results": {
"uri": "<?php echo $uri ?>",
"method": "<?php echo $method ?>",
"time": "<?php echo $time ?>",
"query": "<?php echo $query ?>",
"accept": "<?php echo $accept ?>",
"accept_charset": "<?php echo $charset ?>",
"accept_encoding": "<?php echo $encoding ?>",
"sccept_language": "<?php echo $language ?>",
"connection": "<?php echo $connection ?>",
"host": "<?php echo $host ?>",
"referer": "<?php echo $referer ?>",
"user_agent": "<?php echo $useragent ?>",
"remote_address": "<?php echo $addr ?>",
}
}