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
define('DB_NAME', 'web85-a-word-617');

/** MySQL database username */
define('DB_USER', 'web85-a-word-617');

/** MySQL database password */
define('DB_PASSWORD', 'Nsx.gqgCt');

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
define('AUTH_KEY',        'rv~!D0,X]/=;:)ip0hEDnSnJF#5;2+yx^:1ez3-a3a?(--,m*{^+39hPYP~}Q.U!');
define('SECURE_AUTH_KEY', '|!woTx#90W|wN=+F$-brvr[LhT@tHN++&o#]KtxX,hfu^I-Ew`FfMCwR5c#jh|TH');
define('LOGGED_IN_KEY',   'r>:9;9W.kEJ1ndGHKD D@!|]%TTw?[rT:Ez:iI6ww|P+zRVl8mT@yHh|(ou31++1');
define('NONCE_KEY',       '+In|!g-./W*k[<7>WH[$+f!aHRQ,i-{HZ-q}ly1DEd1E.>FE&Pie1gV`vMlx:%G<');
define('AUTH_SALT',        '?x&L*A{1~kHo|l2U0Y=S&`hs$4O*J)$W:n/x-1yR3>etUofT?rl4;kU,(2R+MqeC');
define('SECURE_AUTH_SALT', '2iFa*K~rBx[<5i|#GO&+K$_-EEC=Pzcj#r4*Gv6jXz2lYJ}.|Ea}bmsq.I`&.>H/');
define('LOGGED_IN_SALT',   'Z`m^K|/zl7|:tX5DYfi-{{=Q}E8U-m*?LGO[LC-> x?8&-e3<}OpQIz)4{wJ#E;K');
define('NONCE_SALT',       'ZJ?&+YWtsg|(5=-2xZ=2I]$zIhH%-%C(}!;[9e-e&%F|-cx 2-sSZuwks}_lN|KV');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');
