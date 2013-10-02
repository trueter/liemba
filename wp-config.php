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
define('DB_NAME', 'liemba_wordpress');

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
define('AUTH_KEY',         'Y#`wr(%*ix{Pbx!e/atv<XH_z-E&FT5O_cJ7t0&yPqI<A!5CinEfJ!F i:hgYwns');
define('SECURE_AUTH_KEY',  '@CJ]SUxkq/Aqt3-b@tNqf4`5GY*/3D2TZ^id@}Lj+iwxGy.3aSWq8&G$Xhq@z@s1');
define('LOGGED_IN_KEY',    'Sj1vV;6z6f7v~B>M6<@mai=;pFKTT*+Sm&n4V[#9uq=m0[m[.z@;3{UCg4cto=Bv');
define('NONCE_KEY',        '07yN^_EYN/~6&SI%SjeGxkB;[fNg#KbO0|@?f2IM)h F356E@MZvt$]K%Yad[Y0j');
define('AUTH_SALT',        'iS{/64`j2?Qk8C` -LphwGWusmid`LC`NC1lfP^|w8!/L%*~$6o(9JUMI%#%xVI6');
define('SECURE_AUTH_SALT', '/3z<A~22641zh*0g$W;X(3Z-6S$}?e%qC}hlTadB+UAeyT#=2cO?#1>p]hgZZ@}6');
define('LOGGED_IN_SALT',   'T/5@q8xnW[?0cfC1iw)t)dWA|7QLVV(N|]ewNn.0t/t=9V-.E@CrWi:yqR+)jtf6');
define('NONCE_SALT',       '!wPPo`tz~CL|TFLV*i#w]8pzqV[?EnxN-1 >k40bR6cL`/UvpE@$pPDmmV7Hv_21');

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
define('WPLANG', 'de_DE');

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
