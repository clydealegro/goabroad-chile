<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gachile');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '| F03d7CE#eu>Y[LsOR<cKS5J>tlP~~QZGK(b?JaL0k2frw|x^aDtm^fGjY-z#OJ');
define('SECURE_AUTH_KEY',  ']3wfS#GjBVX<UjAelO_Gz:Ok4Fy3}TTT:C&lx+di>bT~eLVF%E,lzMtA+5-/EBEI');
define('LOGGED_IN_KEY',    '`.v]XF:THGkC)})=Ve8?-l&3{]XYy?|oe*xxn^k)xMZvPf,JL^t849QiY{3}0Py~');
define('NONCE_KEY',        ',F/O<zbUKh-JF]Jkn|lO_,DCd^KbJNeE/8_PBeM};dV+&x$pg(gYVP95`qj$ }KS');
define('AUTH_SALT',        'pCGT`f2N*S,jh5$Xq4!guFs9k{kwX|tt|y{Z|(3o@P1B6@q|=D8VK~2rQb^8M]Ag');
define('SECURE_AUTH_SALT', 'M{FmMk}pLa4@;S5sdy]%M~xLz$G*`wt8v|g*umV(393)T1#MFTArZZ0G0^:X.h|L');
define('LOGGED_IN_SALT',   'd14p>eMw}=onp9jnlSViUbBta^>n=Z8i;;<8],#+F)}ccP{Hqk)(yo-q]LY,h/gn');
define('NONCE_SALT',       'E#Uu)>+<I;p(N[jp]q&iYDHZ;)orNq#PYB6E2@)|ECyM% FacvO@G`[Lh#08%3Ew');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
