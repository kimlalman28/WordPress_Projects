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
define('DB_NAME', 'first_wordpress_site');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}3W@Ey2)kDe$>$dszy+21!EK5?-}S5EnH``I})051:|Kr ;>pt`R$flbjX67]-z(');
define('SECURE_AUTH_KEY',  'Op>;xRUy]!T}7^*)<9jF4D%5>QZL&cc|H7%~#7R gQSDmhU=ng,rKTq@[0+@f/Us');
define('LOGGED_IN_KEY',    'YpFmA5H~HE:6}#:pv3,AsaHBR-pA4ut]rv8Bi995_XrnDVeUXV /:($r>][TwG+.');
define('NONCE_KEY',        'IYOGGyak=mk$KWWm)H%ua8w|t>i uIN1oQr:xYSH!Uarwt|):PWqXQ(B(X=.#{u$');
define('AUTH_SALT',        'E.4Z!$~yAu7qTM7aP#pco^ayejjT9Z?SCS(:X6t-slE1N|O:-ru7)T&-tj^|:$2Q');
define('SECURE_AUTH_SALT', '>{g /+C.FIW0Y7o||?eyNt{S;Uu>L5]X79(q|95v9:6ZE5^v`|hDay`ZU1$!^bF,');
define('LOGGED_IN_SALT',   '#HS m3]*c_>X.:X1k]:3%#qKpwnv*jNvi;FS=4R0i+~36A`5Gs:>RYalN(h%y= C');
define('NONCE_SALT',       'MH|b-74.M-!Sev.TuXRQvywZ4>wN=PD9H>cLk(:)jCUcF7.ZvKq#V}T71W[gt !s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
