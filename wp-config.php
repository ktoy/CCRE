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
define('DB_NAME', 'CCRE');

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
define('AUTH_KEY',         '}HaP|@w #%fZ<2Y:-dGuR55)E8;V8x*0~pNbMyE|SchgQZh8$^w.&i_4]nsj[i2/');
define('SECURE_AUTH_KEY',  'B.Zb9yHG}Y$kw|p?S6)b,d3ztdE5!*`oU(9qA)gW38jfn#9(cd]Eg;>>5h0K.r:.');
define('LOGGED_IN_KEY',    'Qb3:|19,Z.<KN*$IFmylAB]l1Q]*YjCt{,y|p|2.9d+.uqA9M:f/t%r`v%+(`JXT');
define('NONCE_KEY',        'fV<arG0W{nLQ@m-q{OoObcP/e~I_eO!fxaf4Cs_=:XVo]Ria6koG%/9EX$Otk?rd');
define('AUTH_SALT',        'W&F2IIM<bV|$O#c2phDZk/Q@vC7WIaXBioB}yCjGyHxFZkU=!.VxI/!s4r3]BJ:v');
define('SECURE_AUTH_SALT', '`h!:Ige:xl#wK#~A(O72V&w CBpC[ooCew_msvGMP#*N8IwQ5XCd!qyNB> OK4LJ');
define('LOGGED_IN_SALT',   '22ji%j_#;BTrI:N0~bfWlu~^MTh]A6LLV2X{j`A3g5</#+QB$^W!(~eK7]$q*|:(');
define('NONCE_SALT',       '^D3W~)BrmM[c<]6zQ:n29$NG6ItQwBf{_bh[6frL^<-Sv83y#X?ttMmN~z.!ajqw');

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
