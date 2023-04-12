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
define( 'DB_NAME', 'primerproyecto' );

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
define( 'AUTH_KEY',         'X?#vvf&B{|~=Vo`e#f)T]W65QL[&|!=j/]64zJsWH^$1Lk+q4mn~w[;?E7PSk$ka' );
define( 'SECURE_AUTH_KEY',  ':?$EUigbsV`>6^zr!o~}hbL*dT3R% 4z=Y|#6]HnZVggJ57=g?)rHzlcPSmP?<gG' );
define( 'LOGGED_IN_KEY',    'GoVW*sDOkhh,FbCtO%1xfPs[r2(H`t.YCEJfV[UZAYKJC?.U8{O^U% Eh`f!AR-8' );
define( 'NONCE_KEY',        'w4CW(^m.^C:;^Ux,L04N6WhK^XJ9F(-Kfh5V!k(pANtL@CaOteues~uScg$w@g4.' );
define( 'AUTH_SALT',        'G8o}DEe[rp!lhRyq=LibHB6A^pEv<L*u.[Y}~{LPq~9+6`7_-Qv]_2&*q@CQZ!G_' );
define( 'SECURE_AUTH_SALT', '~I[yOEAxN@!5U|}#n=7~ (SZ;=?#Qf!rn4X%zI8O$MW,^N_&dDA/6_Bm1,{-;Xzs' );
define( 'LOGGED_IN_SALT',   ')`vH1jCp5YzQ7F._(D1!/cx,`.fqu2y1I PY(ITR&?M#MRsYYi4K95uCD+qW)?0B' );
define( 'NONCE_SALT',       'beD3e/Z%{oJdWO~}[v.]^`$dB91l0*((QH~;]D}Sv,zNDC0Spa,<O;c([-XE#fkd' );

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
