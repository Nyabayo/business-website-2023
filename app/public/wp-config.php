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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'euUD_ES]Jkr?pV^@wwHS9q}vs<ngvW7[|<ATb5hivc397mnj*;fehTH$ 0tqlZG;' );
define( 'SECURE_AUTH_KEY',   'U;_-a1e+{s$xud=`nP,KYCoaqpCdx2Ofn Tq9r`:&UF?I@&u.Se2X,2p*(Xn7w?J' );
define( 'LOGGED_IN_KEY',     '((+D)E[=?|$F7}3LLyp,}/|X&!.}UQ>yPQE1FwKM4)Vn{6y|&E:`s?la<;*NQ#Pu' );
define( 'NONCE_KEY',         '`fjpr~YDa,EQi{N=o[$E,${a7I6Q6=k!hf:36!h%6`xUiqe}Q!pFu[*kl&W$.XNT' );
define( 'AUTH_SALT',         '()B<: M3_xeJ*._MY1ufKQDG2E&av%qns~;@l6du )@;2xE].@flRHAs. <XtByK' );
define( 'SECURE_AUTH_SALT',  '~Sg]` 31C9t^8y$lo8 2/gL/!%~7]ety:%#& >8`_|*+r-xYFq%`(2rTuc5L-BaG' );
define( 'LOGGED_IN_SALT',    '!5hbA;VgT>H!}W8cs2m=|aB)Lm|D^sCRw`YyI.-ot38=$r(qXn=Nve0YDUe Wsqr' );
define( 'NONCE_SALT',        'd-~fkm(lYrr4)dXgU).)TSsINq,}VAm.n&291`q9zL0Z1{bm01jf]b>$chOVzmF,' );
define( 'WP_CACHE_KEY_SALT', '&io!l[0o}z$P9bC6aeoeDD]?#HMeJP$fX;2@U~-hqjg6Z- xe<aCj<4^djp/K=u:' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
