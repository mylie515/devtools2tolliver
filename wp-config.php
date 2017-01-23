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
define('DB_NAME', 'devtools2tolliver');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'D}wK29(/;!qPDT3~yo!me+gVs^.hO=x}DFW!8/DY*2>.bm7F.i*do&&U_:+5mQKE');
define('SECURE_AUTH_KEY',  'h^vP}H1q~.//JpI^chH#$*]FXAR6`|!o=B.$D> V+vR[<b9w#>+~F3{s0D.)1~]&');
define('LOGGED_IN_KEY',    'Rz)g_d$pW!{X?kGZIp|[_>BlcN_fkxB]iBQy|b#79aZ^Fl&Z-,43+VIi-Hrdo_+f');
define('NONCE_KEY',        '*cbOo^5#yXK!@I&S+2w!]28jDTmHT@]6Oxno9?(GW^&cfx`y^;b[XUs$PL=aQ3]n');
define('AUTH_SALT',        'V C?o[bKMcG7i,m:a[h{pe8=Og)lE nW3-il27w 3R8XcJLvn>ZdPk4HyqK{L3Sw');
define('SECURE_AUTH_SALT', 'm=p1Pm&1up:hu.2DJ_Hi^6NL`50O(:ou,lzt-77jpl5WB|2cXR-MC*KjILEB1fPJ');
define('LOGGED_IN_SALT',   '74muI%VA>3F65WE+bynPwYu~8.zW`Tr(A1bu5 7zY9J>0{7%x_j*CQj,2fc?iY8w');
define('NONCE_SALT',       '[!)a#BJj+Il0/lf/,m^O)NqgNDYeR7CCy&fQ!Uqd&4qt.KqTs<+*q~i}323?z!bA');

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
