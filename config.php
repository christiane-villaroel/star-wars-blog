<?php
define('BASE_URL', '/star-wars-blog/');

define('STATIC_URL', BASE_URL . 'static/');

define('LINKS_URL', BASE_URL . 'includes/');

define('BASE_PATH', dirname(__DIR__) . '/');

define('INCLUDES_PATH', BASE_PATH . 'includes/');

include_once INCLUDES_PATH . 'db.php';
?>