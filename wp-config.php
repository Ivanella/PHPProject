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
define('DB_NAME', 'db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_unicode_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X}](xd+*b]r|c{k2A$#H^<t6@,|xeeLD[z8(a:#B4I93w9}3iafXAP3d~#xZCJe`');
define('SECURE_AUTH_KEY',  ';?PX[CfQ?cqtd9E*{@p`39N-ya1q<8g{N,<zhZ5/[@|/^8{f-wgQ3/&@KWT1(X6Y');
define('LOGGED_IN_KEY',    '5;J.1ki!nJfbAFN<[tNK80IkPY7x5>qWTKp:|)y@Cos,c5~k4pn[Kq5inKT3+m6*');
define('NONCE_KEY',        '&}-:-mf!C4U)s!a2Y7K60+1O[xIXe>G8wdaRJFS$iV=n;Ged53^}:<^+}?9+j%9/');
define('AUTH_SALT',        '#Nle`G:PJ-x=:v5q5I]5sssFEuo&c96v-6`>&/)&[xW+w{*6}|Q0Er;gIQz />sa');
define('SECURE_AUTH_SALT', 'M_W+K--kYr}RkAX6taPxXY3 4HwMbM_XyDOQh|{2koBr_pi.Qs>bNMYLZa7&bPA$');
define('LOGGED_IN_SALT',   'i|Gl-ESf;(@v,Cz+6M!g#h4w4Ll#zZ-HX,+Dgl6[nw4t67V&3McWB{.zr>X2@BJ1');
define('NONCE_SALT',       'F#VSW0CkzTa]0bKN+[TLA-=UAlGAFMofz)3*XGSzUKw?xQYpcnzuzoW|l-$7wbG-');

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
define ('WPLANG', 'ru_RU');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
