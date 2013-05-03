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
define('DB_NAME', '_s0535063__liemba_wordpress');

/** MySQL database username */
define('DB_USER', 's0535063');

/** MySQL database password */
define('DB_PASSWORD', 'H69y28gn17');

/** MySQL hostname */
define('DB_HOST', 'db.f4.htw-berlin.de');

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
define('AUTH_KEY',         ' :5I+vP1&>v6Rfg7d;Fd6I0ETbMrR -(]Ll%;:;_p8!6MjNBxO@%2KY/bG<--{pC');
define('SECURE_AUTH_KEY',  '+|txE|`[8NZ=[GY<^qjC9;.)9yf-$kSmjOawQ!].7/BP-[4-U]|D{~M<S+xbL@=|');
define('LOGGED_IN_KEY',    '2azM@{e[V-&(w*^aj.gT0%3J%TT+nag7J{jfZy&9FY@|Qftm?X{#gB&nh#ek!Yx1');
define('NONCE_KEY',        '@j2_q=M%>n: dFXT0Yfg7M5xZv=I.Hkr;A|,Flav)^Cv0@(MQGn?QGj.qyFR~O@o');
define('AUTH_SALT',        'g[+|gu8q<BM-r!A)ghLr68%g^s>/pikY9K ;JP0|TN|k8>+>}cog/c8_nYwEJG{I');
define('SECURE_AUTH_SALT', ',cR/,LQ;`=+Aw5^YV*F5BzAWO.Wn@8+ADeB/u:Of-,~;H|^`0hl*2|72x`2{f+~j');
define('LOGGED_IN_SALT',   'SG!w(@-iDrq>q]e=k`sG5;P)b/8(+u^*T&17x6z+hor2q!X7tf.~ YgoZ,,VTOWH');
define('NONCE_SALT',       '%d-][[40kr,wm?c*lUV:LX4CEv|vVLL-1s}99g@J.hUq%),e2cQ,9m+Q<+n51O}+');

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
