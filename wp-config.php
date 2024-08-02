<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'school' );

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
define( 'AUTH_KEY',         'qfmHkY##VQuCBe8>FkLcb[-?FJ ,UBfmu{)zpq>Z;OZPDRb1IG?7Ip,C&)K#sp0$' );
define( 'SECURE_AUTH_KEY',  'm`_XKd1ZBSeUoVX{*`l]<K7-g#*d=~M2]ji3%d^/%=Q}=rqvCE^+4dF`#M-lWEUP' );
define( 'LOGGED_IN_KEY',    't/hz]QxwufChhI;jI&&hBeQ.t%^I6)95t>S]4I/qY@&B`/9V`bbTp=vn3oY{G1-A' );
define( 'NONCE_KEY',        '/qC)1>jv7`2Ks9GF,eb]0.l5WL>{Eb;0?vZ%vxl.pD*;TdWaO)=92^6mo{EVXC*R' );
define( 'AUTH_SALT',        'ONqxB==LS?OCb0viL<$rI/;X .uG58_AthixSf:Dsi2vUEWMz=@XjbQ1eJC.Cr1S' );
define( 'SECURE_AUTH_SALT', '7`)wQpNT|0irYS;QL0]QWCCIzg:@IR8:-(:;rd$9]=Ns[+C=)BL:!laQPVGWhi#,' );
define( 'LOGGED_IN_SALT',   '^MX9,3gWeu8#En$0`Q-:BD@cBF1kc`M/RH]C6O@|0gLis+/=LL#I29QFpShw,sX#' );
define( 'NONCE_SALT',       'uF>y9GA?o+Ii%E`w,q_~mGpR{7b AT6^Hw!>i^i#stY%YbCx87R+Q6[eLx&k<@6k' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'school';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
