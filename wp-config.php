<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define( 'DB_NAME', 'bi4o7perx6umrtucfnof' );

/** Database username */
define( 'DB_USER', 'uqoh402uh00i5hie' );

/** Database password */
define( 'DB_PASSWORD', '81S3eLnJBrJgkfUkEjbd' );

/** Database hostname */
define( 'DB_HOST', 'bi4o7perx6umrtucfnof-mysql.services.clever-cloud.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '82482b5cb45810a4971c25e99d68df19d1f71648f403060e8ad603f451478098' );
define( 'SECURE_AUTH_KEY',  'f9aa4243378e6f3ef070f44b3138ad4d197f808bec0de4410fcbe2134500a83c' );
define( 'LOGGED_IN_KEY',    '4a7e761a349966d5e8042f1056ebdddc9c295c16f1330ebe9c4e2a113bbce199' );
define( 'NONCE_KEY',        '8be1064d2be9d8d80c3c5c5ab2d6522883475efd3dbbbad41840df0b7cac2b32' );
define( 'AUTH_SALT',        '461e963b53da86e9a5e2a4382e4f9fedd7c63b92fb88e92bf33647070dc43590' );
define( 'SECURE_AUTH_SALT', '0f63fb1fc70c9105200c5725e99ee9ccf8c2f646d2ca2e78a682496f986677db' );
define( 'LOGGED_IN_SALT',   'd27b05ad23634fe259a487042c7c485b225656221392cba920524fe538827485' );
define( 'NONCE_SALT',       'eeb9bfada34ad963cfd4005dad88ec0e45363932790082ec90d5b62df6c92926' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
