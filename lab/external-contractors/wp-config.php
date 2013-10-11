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
define('DB_NAME', 'db434831265');

/** MySQL database username */
define('DB_USER', 'dbo434831265');

/** MySQL database password */
define('DB_PASSWORD', 'ceaser42');

/** MySQL hostname */
define('DB_HOST', 'db434831265.db.1and1.com');

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
define('AUTH_KEY',         '>2Y-.J+-vT5=/Jah[[l&8e-SLoh&(+?,y_oOb$-PcddUK*ahUk#bTb4:`hw*D^(g');
define('SECURE_AUTH_KEY',  ']KyLjpz%oliiDU4Nx}~7+%{c`xA}=DG:pP>mAHjaB)7B-{ZpF7<eyrolbdx?9+@T');
define('LOGGED_IN_KEY',    'uQsc]mf3#`F^p?R.SgGWy.n:+cw@RhV+B|0oHv4oL7Hy,#>SfUgSN][jzaR+Q_OP');
define('NONCE_KEY',        'BBk%f0`bV/O l*M6]_;jM(_p:F`VB+N+,So=a)91|Fe-{uCc 4+q {[d:<q4e=lh');
define('AUTH_SALT',        ':hi{R+)=:=hCeJju+A-@qzo8ck$- ^-WBj_d1)S-kKczD]3Ex1jDw]QqXln,F%!M');
define('SECURE_AUTH_SALT', 'Q,Ms>en)c9dR&fQ+5!!^9l<!UeNj,-!G(R|;/O*)bJ33=A!sjF;C0OH,2FZgHM]X');
define('LOGGED_IN_SALT',   '>xb^%{7fDb$>{q+1,g0tU1{<0`vSb`-+M/K]w{yL<pk-}+:@W&!P%BTi9kE95)MI');
define('NONCE_SALT',       '//-ZR5)%cI;F#2.35H1?9E>?BO$Uq=^9j_Jw:Z/o(OeVrmi[!ebTdX UaR1OR|<^');

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
