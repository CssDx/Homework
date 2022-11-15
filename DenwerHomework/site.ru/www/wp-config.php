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
define('DB_NAME', 'admin');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'JvM|NWB;rEPxWMaGq@p*G8)@(n<_$[/tvJV~e{-.nfFVhc[V VPF{W$da:,8_~bz');
define('SECURE_AUTH_KEY',  '|*RTRg9L|@%GnclM1gkM7U{`m=O$Z}k2vU^WzR#J99O,ij=B?#<LzED3!{[[B0i;');
define('LOGGED_IN_KEY',    'uA+6_ZF$^c[j|vD#LH#3`kR?WF.fFIW0DrU)l@X+*7~^q|S:IaVO&&a:aU>R%cEq');
define('NONCE_KEY',        ' i1gu&EwS;~cT&NQ<<g-G75wodESn6uwQ}w-;z90<<:GSqB>9QU4v;]B$6D7A|mZ');
define('AUTH_SALT',        'h-aeGL3cr`=+I<r( IXLGj7NW~!c@@FqV qZ-/m!W}hI#]w*Cl3&$d;7ZzJj nu9');
define('SECURE_AUTH_SALT', '2y?8lpz(o;-`LqwR<mvy^J%G1!~nf0dhb5fsDOBd|tZZy(2`_i]F5$Y8x{r38sJk');
define('LOGGED_IN_SALT',   ':G&xSv2s|I9v3{C=0~DQ%_DW*]!1[h<++4GG+D18,H=^ukEi~_SR_<-4m1Xkg=U@');
define('NONCE_SALT',       '{~R0_a2pB6h}|6cMr_3*Z#qKs;C^:E1{eE`n_R>90b{|4*-vg;j=M{9|k=}+|iIL');

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
