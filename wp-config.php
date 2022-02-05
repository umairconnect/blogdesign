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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogdesign' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         ')h)niI$|I@8`dmN(za/$BOWrNu*%U8c{$|F!9Y)f`Tx4_QVx{UlfIc}dq6qZiKmb' );
define( 'SECURE_AUTH_KEY',  'H`@-:2XVM^X6_cNxbH2ZuUb*[Ypne0rTQJah!k}Y%V`4D AG@(dy-2Y$cNod<^#]' );
define( 'LOGGED_IN_KEY',    'bjLsUY/38t%8`B{]{GFo|x;A^Ic=~}<T72Oh4hQ -z>6~y~G-uzvuJYEBY2G>By*' );
define( 'NONCE_KEY',        '~sTM(ML(h3Cq}:%|6!fqEQ5WVwT`$6f_>o?1(E)t]XUME7?sku[U!P0[CLwgwZwX' );
define( 'AUTH_SALT',        'a>yh{xYoRCXSIX9X|1y )JC4kQ@op``tm`];4Mf#|!,NcR1*12drQ0DCO4;hvCuw' );
define( 'SECURE_AUTH_SALT', '-aj9pT(]]/52;0xHP]35uP!&:Fb1#r#8?S&0]- ?S5cpSv!|C.+fl,cMWYw~[S[L' );
define( 'LOGGED_IN_SALT',   'vW7-Sn`7~7O_.`xt_}tP&$mK-D}Duq}mN0K-B1U>Q?~&WW[tFd0HChD%`1p]Q@Y[' );
define( 'NONCE_SALT',       '@iL{=t^5+WjmBJn#%pa`Nb#YoNMt|L)$j<BzyV#!W9p#liC[57c[pK%cb%wzMV/|' );

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
