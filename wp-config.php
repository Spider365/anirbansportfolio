<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'anirbansportfolio_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N%>1Q>`=dv`&:6<5fFxs}k04!K|Is98;UFrOI>oG>gFVp@zLD*95-SVGn{*l+@PZ' );
define( 'SECURE_AUTH_KEY',  'a>o#{w`wCeKN8[O)6tSw}MCg1`o6HuUrtg&+(0Z|%e<3|a[Dn{vkH?%@)%<3e>l1' );
define( 'LOGGED_IN_KEY',    'U{S9?rkE48H]55B{[4Nna4^zu3o%6jMS}*?OzW=h)%dH.k+&a9LMU(C%yLXjh(KA' );
define( 'NONCE_KEY',        '-mQN(dn8WfXd;Aq5n,~dGiWGfS&m:dQ{Tw(D_J5[j;Y%VBkB._{x>.<S)1a{%mpr' );
define( 'AUTH_SALT',        '2=+NiG$.v1Hqxg34m:G6[m.!!fAa;dwc0Kx08lxPakqSK}[wAP#!bBCU00p/##TM' );
define( 'SECURE_AUTH_SALT', '!Gu>tLMal3Mnv=;s<F(r[,7R.<-O2xgp! d|$We2K$KdL-RlY~!?a)_raV<X*a^s' );
define( 'LOGGED_IN_SALT',   '0=QDBw_OV-y:`%9uv6a>~5?m!|L*iJboFM^NR:~7-9p*kZwHlZenM;u)}Us_(5V/' );
define( 'NONCE_SALT',       '=&J_+F4fSDWt;77hs[C:qfy#S=xI<liQv:=~w?A}KJ8SD,0$_zH[+fK]ziw:pmFa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
