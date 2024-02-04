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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'huy' );

/** Database username */
define( 'DB_USER', 'huy' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'Due!M=O`medcUapeX0msoBR[`-{yp/y;S9*J%.smC!#C:[r+M$%saRh:pTyGo<]2' );
define( 'SECURE_AUTH_KEY',  'go1%;z0Y,Va7GYac$$0NT>jR?%$m~qzms5@QIXeQKHV({h[0u->}YmN^a^={%PS*' );
define( 'LOGGED_IN_KEY',    'ta]S_N3]o4U*%<r60pO9K2EteKuG^k}v 2:(,pE3peAtWL11K9$ItRlZJK//n)z3' );
define( 'NONCE_KEY',        'd8KCf7}T.q}kb>GRhfGb][x^{]zhg! 4[,w=TUac1=KGFep^49yFp|X1f$qH-G1j' );
define( 'AUTH_SALT',        'I2_CxR{i4*D=n=n2|zSCiJ#}hKA3hBVw|-oTtN^G(4n7vNL$=&jsE]pl5O:x_a b' );
define( 'SECURE_AUTH_SALT', 'ERc+`l/#Wy((;COrH@{KJ^n8a)ZVsT,i~5r]wz-Eg`4c?%_*d9}vyVp~hnmgPh^4' );
define( 'LOGGED_IN_SALT',   '{$F@TwfKHcm.UK_O{(/W75f1jQ0@PDfYk_&pew1Fefz?N1r=XXroLhc.]S~E#4[9' );
define( 'NONCE_SALT',       'ZtEvL}WF;h?&,=_}fE-/!7z^pmL(;;U^vZ1db)8Tc1{u`U9`phKpkm[&BHq7wM$Z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
