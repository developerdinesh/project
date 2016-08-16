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
define('DB_NAME', 'theme_ioa');

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
define('AUTH_KEY',         '2t9sfNuxRcE3Ovo[kx/$~+7JS3I>fF97Bv;|[Z06A2GSe/=}/fj.IEjCn=4[FG?)');
define('SECURE_AUTH_KEY',  'PLlXln-xXH!?afC99iG6(#kup6Xo`{,Z}mz<V~4dRri%&P>nxDPs{(-7rWcl_b3]');
define('LOGGED_IN_KEY',    ':Z]Y)rKdLtUeZTS<^u<w&S@9{bEYe>2q*.4W1cdz!QfEa<zb,6sNAvuREQuQu!x(');
define('NONCE_KEY',        'wD+_~uU{dHoKzI1]/?+8tp#*6j6xGG6#!+wrv`9k|dDr[*`>+h6]l^$(00bc:DYY');
define('AUTH_SALT',        '{&qTIx3B[BC|Le;_h,PL]a&)4Lq=1rBO&D>9+DD)>WeCn?B(@ZOB$,93:Ip@vcD]');
define('SECURE_AUTH_SALT', 'g9xc=T[PB)Op/DN%)2n/[@?;q46hfXqq ;]xx5)=XSI]aLx2Iq@F:wDijvCe<(a7');
define('LOGGED_IN_SALT',   ',,]RP^W#aFAXBhP@ksBMb#j Wa1<W]nULkQ,+`(cpX9AL4 uSTx=j;IsANv@kxR=');
define('NONCE_SALT',       'pDbeez845HUys-OVtPp(1zcr|b{g_cRDl|;E|nvP:*J7Yr+`^|a}y*tKo2$N7v%9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ioa_';

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
