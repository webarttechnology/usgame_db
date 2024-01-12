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
define( 'DB_NAME', 'u781078481_usquare_db' );

/** Database username */
define( 'DB_USER', 'u781078481_usquare_db' );

/** Database password */
define( 'DB_PASSWORD', '5#mHv6jU#+' );

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
define( 'AUTH_KEY',         '{z/+CK.M?-HIN<mOyyVzvRYe~&0f]-#MF9TSfycHYCc@@~r?R@S3eMiEs!xN4|w/' );
define( 'SECURE_AUTH_KEY',  '>xef`?5l,cS}6K #aGU!NJsj9oyl`+mpNn#wm|&G!ahg$zFZ=hLFHF1t@lW77? g' );
define( 'LOGGED_IN_KEY',    '*<xsjVd3gnC>Nu dT*y:fJYAQ2d!-A~Oby 9DHhM3_a%6T?5k?4xLwY*]&$sW-;p' );
define( 'NONCE_KEY',        ']# E%hO`KIMfzY*`z]tK-.oymU)nq8tLmDS[i+DwmDeW}@BGdaGI-98[8=qWrS=Q' );
define( 'AUTH_SALT',        'z6ZUcq.PVPmqn*YaM]kSV~|VsGSW/v6L_@V#DrCfh[|Q43nL%5%cK0}6,lOX1T@h' );
define( 'SECURE_AUTH_SALT', 'C;.TM02frAnhM.|7p}{Xe,[_JuYRNRqHbm^dy4cw92XC0=}d(QR&;DsQjllrcfyH' );
define( 'LOGGED_IN_SALT',   'VS(R&H=-sSYR_#n*D_1cG@P3n_1LmX.pyp]m-cFNvu8g_E>ED^C]bLK:Y.pO8Nh#' );
define( 'NONCE_SALT',       ';im>fB,wa):]87l/EF5Y[!.Z[3A,.JrAEtkL(;QTSy.CWc`>Nz9 K?xFYnJrFgZ|' );

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
