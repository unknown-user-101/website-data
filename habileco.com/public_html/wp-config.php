<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'knvczC3vEILSyr' );

/** Database username */
define( 'DB_USER', 'knvczC3vEILSyr' );

/** Database password */
define( 'DB_PASSWORD', 'h1yaaErjnqgMw0' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          '$aw?wDU~76@t9suB)S#uZIrW`vhZf&Ee9/mP5>6?QT*iQQIipvy[Ke&ft|#<nJ&&' );
define( 'SECURE_AUTH_KEY',   'sOm17HWS.tb:OKzKRAaGXao^hjf=ot-zm4Z>R#P(W}8wYGT{A(NpH(0x2d_uolR[' );
define( 'LOGGED_IN_KEY',     'G/1eX,Ic*4CmQJ%R0,r#DBKV7<_].r5|H-bY!6CA(zr^f>A>,Yf)A0<*g~Qs;l`E' );
define( 'NONCE_KEY',         'Hth%4KSk`xXm2Ani,A~CLFW=4rQ*_Nz4FRF;`}*Y$(,#@^{$IK#4WecKigwrN*c+' );
define( 'AUTH_SALT',         'LUD7T2>_ik#XXd<_58drAqHVb5(]TT#v)GcnXyu_(=ec/Ctx*O+LOIgKdPas4riH' );
define( 'SECURE_AUTH_SALT',  'GXCNFG@kc:Ox@p[GEUxDZvgPH`WR1[L,6VUJLDOI~ MwBZg(:5zfHo1zi}oPAHO&' );
define( 'LOGGED_IN_SALT',    'k&kd4iU6|#b@Rir-(?_!Q$p++;L+)u^x&AdUf[::,R?Ut}^u4>3m+On^YSrU{Bc$' );
define( 'NONCE_SALT',        '>e[9cM+O5*=^.f^^Bu3viN8U#yb9qW;~A< U.z5uy{J_OA:=h%aH}X8JifClK{F3' );
define( 'WP_CACHE_KEY_SALT', '+]B wDZ96{mos=Dl<VZU@0i8xNF9pLldxDTQH=boZ51whdh] yGVDTOqZ7L<jr>R' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
