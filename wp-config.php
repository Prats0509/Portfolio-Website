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
define( 'DB_NAME', 'project_db' );

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
define( 'AUTH_KEY',         'D}:-)a+KLb&_=vAcI`X@sepnM?a}srcoO$S=~Jlt;ww9:I7UMf3hg#.|IvX]XAQW' );
define( 'SECURE_AUTH_KEY',  '0RH9sf5br2}Q7Ew2y9L)9DYE 9qwOF@#y-b6,OTa}:kf!B$K)(.$~+`ILgN/!6/&' );
define( 'LOGGED_IN_KEY',    'JYMTIlLlE)0~7nbLo9b@r}(*#}b4!*GYAzkyQ!m^4VO^?)0siZ-eao`t) :!gs3(' );
define( 'NONCE_KEY',        'P{ym+Ko2d*HG$ y}Rj+1n*c*H;*d6rCN :HUk,ra?d|5tAk|yp20GL.#p]#R9>K8' );
define( 'AUTH_SALT',        'h-2Ye4t^gRFiVei^nbEz3M.mCux%0npo$./n}995^&qMjEqLv-o9(3s Rs-KfbKx' );
define( 'SECURE_AUTH_SALT', 'K,5,KTU3dG%5#zGt+y~((IpgNao$5@6)P&KFl_vWGPaEK6IUst}w~(GJFXwR0*hJ' );
define( 'LOGGED_IN_SALT',   '{zro%Id9$78Q)EzyG3h` >wb|V#9(^,1a~Mvm 2?Wav4~[l=PGw?EbMJs[}@/.-r' );
define( 'NONCE_SALT',       'KjSof@?hs_yU# * pS_N}pTdZDq}$(GTF6u>@6D-T={=SeuMy|gSl8<I5F;NQ;YW' );

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
