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
define( 'DB_NAME', 'pp_couponswebsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~]e?).Y[/dlgb}cubHK;ZH<;Z*p|x+69!2f3ybdqt]I~7D;9zyH,S]62`(ElZc&^' );
define( 'SECURE_AUTH_KEY',  '3#2}crmTB6[_oxls5_~+Z?3iR*&Pz`${f<0gZ?R3~,-Rx+mvj9P]FWDUJ%z c=qI' );
define( 'LOGGED_IN_KEY',    '!a-#A({nj.,9N0TjB(|f]:H*.LbiLF)HXJo$hNPRBkv,gY6l,g9bl_2E#3,kiZ03' );
define( 'NONCE_KEY',        '|gy&eAx&}gv{GHJy;u;: _ :[`Xw@6*}yLX)~/uSc]|H<OMXc[Di/#]7p ^WSJB9' );
define( 'AUTH_SALT',        '=tjYmJr$4MOzpaCl{-4Hjskm>.*m,4CBz0q=Pc<mace1m-9o(UU/3fHc4^L}7>$#' );
define( 'SECURE_AUTH_SALT', 'v,fh.tB/)8Vniq,Z^y^&jF`o6$lyoO):AL7w0Wpy1uO?r(}w#MVBZB]I6mpjw/-`' );
define( 'LOGGED_IN_SALT',   'y?J`oN,$yNc?j]k]2je1)_$=ktZ;PrbMO4}}9PVFa3itdKZX!Us)$A2YxB@!G^}A' );
define( 'NONCE_SALT',       'S:e]og~~=twg.=skub~n%&Fr$8f$iw<xaOB:vt)[GyG8z7VsmwicbTnFdz4XJx! ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cw_';

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
