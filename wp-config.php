<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F96WcMzEyey3762IXNhV4wzuQnDnEsoUVbrOTodyC75zrtsuuawukhB0b26L4eGJqxGHWzp4SW5Tk6zqohDMiQ==');
define('SECURE_AUTH_KEY',  'pt/Iikj4r3X7oTq5BhQbgxrgbmi+piTc8bk7b77HJaYmx1+hNXUW4E37zkXPSTUaENRq1IwJwAnL5BNKM1uonQ==');
define('LOGGED_IN_KEY',    'gWEfBeq3937ZYQfjZeUd43iswWYQuqh68nPYk1EWTr5njdJe1mneDYzynmBoeb8kBVo1Qzj2I39cfMxjxhHMDA==');
define('NONCE_KEY',        'aNIp/PqqBhMLQM3uJ04lZQDOZ2lIiQwwgxEdty3G7XgOxyImQKs2eyXdPQHptyA2zisBnrQbf4LukcFix3iesg==');
define('AUTH_SALT',        '+GQeUCAxTKvkZp9bvZijJP5YjOhwN5WdnJW3MAUHGXHTfloGnpCM8STN6WMNxgYSmDvjXeB0j4Zg9QqqxBEeqA==');
define('SECURE_AUTH_SALT', 'VKxENR0lcDIsnXVjVjRpIxqysGv6Bx8NiA3lyXonLUt2VtCoIVdEUgcZWjItivBMVpryGZWQEWEr8jMvGOGtGA==');
define('LOGGED_IN_SALT',   '4pBCA1CqAZHDBKfvKyAkthNK2xFqpQUi4c0F64uRydxrdK0ohhgkUI9gPf2ogYegwL0R0QejrqoUrhKyOOKieQ==');
define('NONCE_SALT',       'anMWmCQSL5iUhRcy2zuxSfHj/ufS5H85xCZc2l2R2ZqViYma6G8H7mF+EKDrd7a8bF7sxoGP6Jo9sy6V+L83vA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
