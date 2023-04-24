<?php

define('WP_AUTO_UPDATE_CORE', true);

define('DB_NAME', 'wordpress');
define('DB_USER', getenv('MYSQL_USER'));
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));
define('DB_HOST', 'mariadb:3306');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$table_prefix = 'wp_';

define('AUTH_KEY',         getenv('WORDPRESS_AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('WORDPRESS_SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('WORDPRESS_LOGGED_IN_KEY'));
define('NONCE_KEY',        getenv('WORDPRESS_NONCE_KEY'));
define('AUTH_SALT',        getenv('WORDPRESS_AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('WORDPRESS_SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   getenv('WORDPRESS_LOGGED_IN_SALT'));
define('NONCE_SALT',       getenv('WORDPRESS_NONCE_SALT'));

define('WP_DEBUG', false);

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once( ABSPATH . 'wp-settings.php' );
