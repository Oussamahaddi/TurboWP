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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'GZYoU(!4<F/Vb5q^cqvr#Y3J?Uit0K@Pl9*~MW.8_@:hy)c2iVT}Et9F0?Pb p~=' );
define( 'SECURE_AUTH_KEY',  '/8<RLF;Tr9O$Jxt&~ElIiqCl(-B[Zh;_UV$CT6>Uj+5Rc18#0{ah9kcJ (&K[|5T' );
define( 'LOGGED_IN_KEY',    '=su7J$:UN?9J6^CH aJF$d0OE3,aeoIp^QB/g9Bzc-w@3BKyPXJBt3fbo)yx<.6N' );
define( 'NONCE_KEY',        '#h_Iu6 qN=N{%<gFO.@Kzd_pyF:AmmwKQe.b`#nKd!F!voa?$h9A02vhDbS>)&Yf' );
define( 'AUTH_SALT',        'H<eJr?}hC1JLtAxIA82IZY=@yKu@xi<#yqfM}Jp9Pg7>C+i/9sp/O&5sTb/]tcjW' );
define( 'SECURE_AUTH_SALT', ']ubds9Bp(|decX*pYck:RDB}jUN)H{3_#Pt={LV^T0Xa>a5S(HKOS[_x+iaS E.F' );
define( 'LOGGED_IN_SALT',   'AOydh:Ju`51S#XK2+EZ5glO$4RrAuv8#g(7MpdG.4s%BLjE{FEFDaWtlly{wic~q' );
define( 'NONCE_SALT',       '1L}uya6yN>lNJ*iA=COQ2MKQQEK1<7u7vcd)cW_pod0hg5J*fO*8mfwv2jKximg]' );

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
