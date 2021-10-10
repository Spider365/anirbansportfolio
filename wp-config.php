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
define( 'AUTH_KEY',         'Opt,/HNDv[>|&O^Tu:sPF4o<eN(4iLc;fCtt]eL`mx9`v+]g&a?W7L}pW]KhL^ a' );
define( 'SECURE_AUTH_KEY',  'z(G56oL9~;9EUr$NUW4mEjaswr:]00F@3_9Ubgig+*?$ZrtWA*}qLUNrf6Ur(aCD' );
define( 'LOGGED_IN_KEY',    '#Y/4Mf ZE&Vfrq~Jys*hOPM!lb0IMdD4Bou(4pcM2:<$Z=aS0H3kROvt18+,RxE1' );
define( 'NONCE_KEY',        '&@5J<jq!o@/ni`fyxx}wYwv2`vj}`uNg)oxZ&R=ip2+Y|-S}1rN2!1_%Lo(]yN m' );
define( 'AUTH_SALT',        'CmM(-Zr-5/G#0iG}7E(Y/]d:k}E*&O?W0!H;#g#NgzmEG)16n5nL1[85_-c *_wo' );
define( 'SECURE_AUTH_SALT', 'd6jIzuds-_H5fcn8#fPLvI?lQgEI1kINr)Kh/BT4+$v60Bwl`jhT(n2[.<DjNPgN' );
define( 'LOGGED_IN_SALT',   'VHJ]^I(d`3}m. ~jgIEEZDS/7v%:DSCKn]ihd|6^M@/iS54 k~;k)C}wMkVQAwpI' );
define( 'NONCE_SALT',       'k;bc]Tl77HGED!j}X@ZSB]q*2gL=*B-D;h-54{fR:8#IXe*c#NwkRK^QIE2vsb:{' );

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
