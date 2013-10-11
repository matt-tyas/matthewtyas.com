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
define('DB_NAME', 'db429014995');

/** MySQL database username */
define('DB_USER', 'dbo429014995');

/** MySQL database password */
define('DB_PASSWORD', 'ceaser42');

/** MySQL hostname */
define('DB_HOST', 'db429014995.db.1and1.com');

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
define('AUTH_KEY',         ']r`O_t-kdK 8*?sf+~gM+-%{=+SOxyBe]q%E+r.zOTp0!U4!|3hf7-3/^j&cf%zf');
define('SECURE_AUTH_KEY',  '/QfHl,Nf:E*)Jr3BlJJ*3FjbqCNo02-$hsfvBr0o3 e`:+=I3n=,&7,-}z2~*^bt');
define('LOGGED_IN_KEY',    'c`;]w>B^89;x>[D-BU>qK0ht3.5f3SSqD6-IHbtv$l!to67q{wU,+pN:D0cl[s}S');
define('NONCE_KEY',        'P}90Fg)cH*eNqY+s$x_IrDHrQUY^[G,-VBSU?thH}r6V*uB,%2fnR[xfDch5B?l&');
define('AUTH_SALT',        'go~qW-+K28%iy-C10QD|b=0?4e{Q|pvn!udC8?X?8(5WVoQqxfU@cj_pL[kevk/7');
define('SECURE_AUTH_SALT', 'B|nPRcr!?rlKlDEA&3? <MNfE6e8E/t{Ro.bZouZFvDxFh[bNXhkKUdOx649abc?');
define('LOGGED_IN_SALT',   'PvsztKZY+Y[0?rM?4^2>7UwgK)M4Ej_?kF(|^8Xlaf a[gM16E&(mCqF-`o~$YYX');
define('NONCE_SALT',       ':ltqA7+[p[Gl2@>$r}C#k|sv99}qnqu=?d>CG:(#!z_-pG?e#<_+;$@Y@Atm6PD-');

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
