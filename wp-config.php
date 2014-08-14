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
define('DB_NAME', 'wordpressdev');

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
define('AUTH_KEY',         'zenXv;NTK(1RUOvHJg(Ym@4DqXQS]e61Q7{zQokgpC#1.y2W{}Ab49o||GN`k1Va');
define('SECURE_AUTH_KEY',  'HoQMgO?^Q,||u)NhN&KcXHpStW87pazmR}uRoe)I{~%A>dH@]8T{D=A)z)duKWE?');
define('LOGGED_IN_KEY',    'rTu:]pC(EO>ho&5SFMDbDicp-e{ee#iW-vo#O*LoM<`=9J3t[Wy%IcE|ztly=L.2');
define('NONCE_KEY',        '7*@zZ/5w$fnq@v:*3:*3$2bObc?ZEi?SV^B_5meCXZ4vp]t$d{ZTgenjG|^z@Sl!');
define('AUTH_SALT',        '|qpa-dHcF+9r6S??|u}}m%V_t6?cg7KEHo{q:(~p3M-<S~}-^%pxqD%<hxa0X(?7');
define('SECURE_AUTH_SALT', 'Q9qsceAKNKT|g87G2I#%Y 62q>R|{F{S+?V+V6?68wCx5-+qTU1i4)8~wDY`0m#C');
define('LOGGED_IN_SALT',   'u|H@6<kQg.(EFUE-~|S$U7D$T LJ^)u<q]3>{{6 FiwUw&uOq.>kww8,nkr#,|&c');
define('NONCE_SALT',       '*-yII.$a1qQO>4|;K1w!a?ZZ56#AH%2vKpIjL+Gp}a${-C}B89wd*R}&7rN^eRo6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdev_';

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
