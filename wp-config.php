<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Z^rc-$+pD=ygEb2)M9b+N0IF+k)//zCOW|3+sGk@P+zs;_,Is!_qt[H)Kdb)4^BI');
define('SECURE_AUTH_KEY',  'wI*86YCttg/QcQwli]]p*vfhvoo+CI}}m+):QkxB;eH>8bA3s@M+$V_3lECq4YGu');
define('LOGGED_IN_KEY',    'uR3A+Im-jaVg:XhtM?>GBp> WIP5R*w|6CTVx]|a?1|T-Ry 3|W?{oH(ct4&JY $');
define('NONCE_KEY',        'HqdmHAKDCqX$5zJH=8-<h!fSJ|2~kcgx;b32V^fWWDtE_yJxa4zbBC6L.?x5mW5a');
define('AUTH_SALT',        'TZ;^v]-MFy%g!tO{{?PMvNoDpsIb}Mf`^wL[|c{/9BHV- S, &tF7(ZWR|D<KP:Y');
define('SECURE_AUTH_SALT', '_k%bAYbM$A,(o|9]w:k:!+^Zs?fw}[]k[!k%uvG!I6~Wc9.{d.,mF1OQ-}pda1v0');
define('LOGGED_IN_SALT',   '7_j|>>A[ObJT_KD<Rp4tZ-_pHj?T ]`RH?CC|D+lf7Ae~dD,y17|]/Qhig0)1yJZ');
define('NONCE_SALT',       'x-soi(BR]ga<E/gtwR,r4H=idp>s!PH&:?#1R_&e}c{XobemAAE#sUAb`gfd+:-:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
