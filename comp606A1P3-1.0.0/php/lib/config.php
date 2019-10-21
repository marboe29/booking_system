<?php
// notices
error_reporting(E_ALL & ~E_NOTICE);
// database
define('DB_HOST', 'localhost');
define('DB_NAME', 'booking');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// file path
define('PATH_LIB', __DIR__ . DIRECTORY_SEPARATOR);
?>