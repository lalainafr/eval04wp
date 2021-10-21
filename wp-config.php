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
define( 'DB_NAME', 'eval04wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'ln1#)stBt31Ki`UHp]KYobxTvEh]YV^wmMi+uuFRG9Aj{P#S84AYCq&o${?**hk@' );
define( 'SECURE_AUTH_KEY',  ' i1[:5Siia+V3`8JR5gwj2/PWq$wS0LTO7 $UTiv37}#1mOd<,O:zfKir)mO5xQk' );
define( 'LOGGED_IN_KEY',    '8GmT>M&p[?5|-c$9-)/bVse-|6};QoM]tr<vrbcn|=Wo>1!Of5JFnGV>A)J?Hq9u' );
define( 'NONCE_KEY',        '~~`m}xljr,m`!vU+nDB0E-.ClElO7^.C=*AH-F 6tW?z70-$^G(:z|v]? k@Gt]o' );
define( 'AUTH_SALT',        'd/Yta1?m<zoL!Xn_/TXSm6=#g@Z q3}3*neMlQ@[T,oN4v&K,E*<FQ]?vC!`|F_[' );
define( 'SECURE_AUTH_SALT', 'Z9UGWLyfv/*4=c/EuKp$$|k|K76FJi9b;4IU[%xTFN}cX6Hdgg4[+bves<VbNY#r' );
define( 'LOGGED_IN_SALT',   '[npoZ,wLmh.ju>^)CJ4UNGDb0Ugj1=.* /[mHA.r+%fkR5_Vs4<lro!}2+anPQv:' );
define( 'NONCE_SALT',       '*4Acam8Xt,.cHxGvEXcr|k7*Y##s!+~:^RCfYeoljo~TaF#MFIDgvV+~L(|[=LBB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eval_';

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
