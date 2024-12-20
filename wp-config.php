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
define( 'DB_NAME', 'coffee' );

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
define( 'AUTH_KEY',         'wCdH`S3>`iZ%s4>P eTLRGQEL{Jn *VOX])ETN80*%y|07=m7%BMQDT4>0oXJ6g;' );
define( 'SECURE_AUTH_KEY',  'geVCn}CmLF3Y.>0a8Hj<S N3}L+)p}@Yyv:MWpk(Cf7KV-OU{mvXd_;OrE0t,W}U' );
define( 'LOGGED_IN_KEY',    'fw<<k03,JD&UZ}Kap)Q;I7T#7zzqw9d{LePA4n)+tZX)pgq;O7;ReY*8-5aZ,,L5' );
define( 'NONCE_KEY',        '1rIP6u-(.42AI9M_q|RDd89MCS4EgU:p;AwLS^&:qo(Q.Be5Z]<3Z)X?GVQF?Am7' );
define( 'AUTH_SALT',        'p&.7ht(6XMTo=V4Ye<[n%Nj_cY0oP7@M~P+(: *L,d<ByekcC5(agc5v<7==dy#A' );
define( 'SECURE_AUTH_SALT', 'n$Bg~*Jp3&r$kv<E>-r1,vTVosyRUZdR/*QW!KC:~5v/I~xy8ro6=JO<=F2t/zNR' );
define( 'LOGGED_IN_SALT',   '#/.x0:!iSs(7-6`OvK83)~2:@>AOI?*B0c&.H|9_8gp3F~T o{a?$CPyBM?TML[K' );
define( 'NONCE_SALT',       'iT9IVmTtFJ}`==|Ae^aS[1Re%UO.bf7A{j|FJT91]QCC,Ig6sJGkLOp_W>p #+(v' );

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
