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
define('DB_NAME', 'b13_18948997_foodomni');

/** MySQL database username */
define('DB_USER', 'b13_18948997');

/** MySQL database password */
define('DB_PASSWORD', '123QQmilan');

/** MySQL hostname */
define('DB_HOST', 'sql201.byethost13.com');

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
define('AUTH_KEY',         '}&>S@A.oa=bI])|irSL3k hIe,]XqW.%uZHA/TxiZ*9^;I/wxX#VVjCp.=+11Z0e');
define('SECURE_AUTH_KEY',  '+X^ .)HSwBaROnCq&F{D~D;2a&{}OZj<R0rM_K-8jjpU^)M+nGDc1-b@WG:<R^Tf');
define('LOGGED_IN_KEY',    ',?ruC~D`0:PWO==c;XY9xrHe5F*4IMHR=e1dl5,sl3>Z2PX/c^m8H76j5$VRx]wR');
define('NONCE_KEY',        'e#Y5s,]%)DjB;^Wedg}Gc:(wM1Ra325kB*BLSn ^bzMhPeA^W>gr>cve[E^ Az4O');
define('AUTH_SALT',        '/f&c`:/RY;Qf,g3~0#kr~8+pYzX^lQpY~Azh$lHMPcyfoqZ<%_f<{!TW:JSp&BWj');
define('SECURE_AUTH_SALT', '`JTblgZVoV{@FLk:;ot-6RTX;[V}w|~=;>IfZ1<&a>EQQ:|<n9j|tRf=<Uaj9#zx');
define('LOGGED_IN_SALT',   ' K$V~~+W_bH4I>t&y2~-[ sdOFwz_usw{3_>Y^g~?ikHRMG3YWJ=TvcR7A}A=4*F');
define('NONCE_SALT',       'm)N#iqH{XKEU] WZQ*KwB!^q[2H(hO=^$OQj_]k9Ea]u]4lZhuK*>?nt4?BXizV:');

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
