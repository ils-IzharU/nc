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
define( 'DB_NAME', 'naturallycurly' );

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
define( 'AUTH_KEY',         'Mk&?oII 81PrwI0JqE,^K]G1E$z2dW9OU1-$2bqSUiE^YDXi!r3BGAX(^P%z^;JY' );
define( 'SECURE_AUTH_KEY',  's@9 LPMxl%bTX8[XTgaeEVZnADeQmKAeExsA9<t6Df$!(wt3~!BnH=NaCjh<50(y' );
define( 'LOGGED_IN_KEY',    'g w;%xQHIzRH4dbslc8w}Pox)+a-T8Q/lST[ns_:?/qz|&wfJ=344gs]ZUN#D d`' );
define( 'NONCE_KEY',        'm$JiLnl*gow-31csKD//o#tLy]Uw^#Mo(Xt%f&^]9e0hpBb?s0^UR7|&wT =sKJ6' );
define( 'AUTH_SALT',        '(y>-t}c/QyacnL^!oMu_+2k8a5m7lcT@v&BDN^!}tH6d<pkl<60)MGm=R`X`nDv8' );
define( 'SECURE_AUTH_SALT', 'SO}XbN4F;)>~~y,2W+C-;QY34J)By-{h%D $;`2+!x $K4?W}PrjE VqK}z^U+6W' );
define( 'LOGGED_IN_SALT',   'NC3Q>c#8XSo~V<Mg[E<&Kfc6N_j[<C]*(HmJs@kfG-FTPr5{)e9Q![wkYV,xw!y!' );
define( 'NONCE_SALT',       '+QgsCXr|Fqq{f~P:hnH-Ux%3i2N]c+HPRQzpEJ9BngN?Y|!E/elD3Lm2XeQ?E9rf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nc_';

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
