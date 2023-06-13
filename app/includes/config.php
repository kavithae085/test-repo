<?php
define('CACHE_ROOT','/tmp/');

$isLocal = (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] == 'localhost');
define('BASE_URL_BASE', $isLocal?'http://localhost/frammer/public':'https://www.abc.in');
define('isLocal', $isLocal);
define('CDN_URL', BASE_URL_BASE .'/static');
