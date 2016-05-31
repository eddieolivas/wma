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
define('DB_NAME', 'mystifyi_wma');

/** MySQL database username */
define('DB_USER', 'mystifyi_wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'A=A(z(JTdckn');

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
define('AUTH_KEY',         'jVH{#RsRZvD<:q,unSA^,%&KFfBZjvEFOS@fvZ|5o_f{4E$+>q=tac+W+3R+uT;G');
define('SECURE_AUTH_KEY',  '0[7<sV5f#vYpefD5NhsD1|iC6&A1]jyg;<j^&g/g|E+kZf<Xf4Z~?qu+cl[9?Dr`');
define('LOGGED_IN_KEY',    'G: :~huP5>X9,jr>p5,txx;{]Z/-E6-0]wr[t8z{t/( 0%&rNQ:0a&$<yNG+uT-B');
define('NONCE_KEY',        'EebSy =LZ--Q5E]5[b{p,p+|W;RebLdwhc7cIrnDa51e:r-3ir}J1~+s7pISu`#c');
define('AUTH_SALT',        'e(r:p)+4-qr;Pok,b9.~L;e(R8G]+7h6+H>?KXARoL_|r9G&I}Gym&<SDG[]::sb');
define('SECURE_AUTH_SALT', '~_wN1Y;D?/}cliR:N>7s*PX:L`MG)eZ,R4Hb+`q8wX{6/|$HaW!~o==)1}O4j=G[');
define('LOGGED_IN_SALT',   'l)(hvcP3fAPS{(s7Q@kNBGW8IJq(}@c63SxxF04asG(?S!Sn?w-I9++VD-Y%E}@|');
define('NONCE_SALT',       '{C[JU?;p7 j:rG2EWmd!(?hSK1/WY)_O38k&j0C6eh!m^spF0I>5 FPK?u./+*25');

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
