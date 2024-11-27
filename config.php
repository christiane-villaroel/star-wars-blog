<?php
// Define BASE_URL for client-side links
if (!defined('BASE_URL')) {
    define('BASE_URL', 'Blog/star-wars-blog/');
}

// Define STATIC_URL for static assets
if (!defined('STATIC_URL')) {
    define('STATIC_URL', BASE_URL . 'static/');
}

// Define INCLUDES_PATH for server-side includes
if (!defined('INCLUDES_PATH')) {
    define('INCLUDES_PATH', __DIR__ . '/includes/');
}
/* //Define NAVLINK_PATH for client side
if(!'NAVLINK_PATH'){
    define('NAVLINK_PATH','star-wars-blog/');
} */

// Include the database connection
if (!defined('DB_INCLUDED')) { // Custom check for db.php
    include_once INCLUDES_PATH . 'db.php';
    define('DB_INCLUDED', true);
}
?>
