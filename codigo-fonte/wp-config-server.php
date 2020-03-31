<?php
define('DB_NAME', 'mundoviva-wp-4uUB7man');
define('DB_USER', '3iYuA9miKtQH');
define('DB_PASSWORD', 'u1TWx1OKEmoXTw4E');

define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'ODgbvPqCVJTYUX9gWsKJ0caePoDjX5KudFATLEvM');
define('SECURE_AUTH_KEY',  'D679FPlXR8REWHzE6I0H9xsapo4bAq4YneVhBGtJ');
define('LOGGED_IN_KEY',    'xPmWvrKYUbgdS1uV7ObDqYuOkom61pVIny30xegl');
define('NONCE_KEY',        'MXUNqEk2sqRZS5hnDLTAgEe4eus7W8bCaHGLYjks');
define('AUTH_SALT',        'lQmhUTa4lBw8lE6CULus92pDzdX5gamh5n5aYgLv');
define('SECURE_AUTH_SALT', 'W2BueLZVje04DMoTfuQtqqlyIRQyi2UOkDWcJH6U');
define('LOGGED_IN_SALT',   'IOWoABUvq8Wc0v2clyfUHTP7Sqth1gbSbuwJEw6k');
define('NONCE_SALT',       'CVxuiTrnlH9q5DSpScSDRcOG6OQxocXPELjUHXwg');

$table_prefix  = 'wp_';

define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', SP_REQUEST_URL);
define('WP_HOME', SP_REQUEST_URL);

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
