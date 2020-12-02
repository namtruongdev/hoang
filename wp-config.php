<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'hoang' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H$pA=Q/Cz:mg(Q3LwUv1KuK}L-y3d1QDtA4@BCrVt;&llD,=@_w44HwZjcG(M35Z' );
define( 'SECURE_AUTH_KEY',  'CtK5e3GLl=RN+4;ch*aB]qy-n#(nwxZ[2&4jhy&yR;GA1Djxh(kE]8/?-q1Y)!J|' );
define( 'LOGGED_IN_KEY',    'Qm(uqkO-1~kg;mTJ9VCJ{f++DX93bEYK85|k}KdP$h<1riH7L1Bm[2/$6LzV^g4E' );
define( 'NONCE_KEY',        '}&t7:Y[d;}?(mm{WuCj:.sz-?CNVCIZ|o6@ yD)wskIkiq(|jrp|/o%y[qJYhDy~' );
define( 'AUTH_SALT',        'I@}k>%g8/>Z{PIz1?{t_T6*y55i(do%&M,/`jjG@|LD5Wt_J,pW[K :OtBYh$fX`' );
define( 'SECURE_AUTH_SALT', ',}e=$>aE{hXK6Cg`<EaRR+)8 -QF]Cw,6|qg!Gt?QEDEfJK!taI`pq5EC^@Xh92}' );
define( 'LOGGED_IN_SALT',   'Cv-zE5g3v|YqG$xcqDg p8;~PHWOW{su`!P&DHE0Zd[e5TUw@,zN<Nf|(G5~UT8f' );
define( 'NONCE_SALT',       'J _CRVA?<e8tr5r*7wbJc?=t~UH*=MG&r13aCVJ#Uc*!7a60qz$USJE7rCGB)HQU' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
