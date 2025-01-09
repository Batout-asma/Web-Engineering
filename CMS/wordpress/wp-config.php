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
define( 'AUTH_KEY',         'V|8z+xpG0XJ1KpbCFiSVPnytPr%z+E(LTwCZz_Iek0%iMLL#hnrW^(>4j:/k`EKi' );
define( 'SECURE_AUTH_KEY',  '}5;QG|yQVlDd^;)7-|D6Y(Z JKF{~[DK-$m+mcB{h.n4)r#<{v, 7(!Zq9x<Ic61' );
define( 'LOGGED_IN_KEY',    'y[bK2rF<i6tDW.Iz_C(iT-[0;mV/tXVXz#%T*#_l]H$p$uK;?6Jr>RPdD`?LQha1' );
define( 'NONCE_KEY',        'q~u5GOxnL)_{@{UMs&pfp9OEuHY*jGQniLOsb4lVd*#G/rJ>unpJ+0Ha$qsCf8kH' );
define( 'AUTH_SALT',        'HDW^O.vwX4(/yN~eH5R~;FIsdAMcjdh=O.}QF%$*zk_?5E*Z 8UF(NADbZ*+9.W6' );
define( 'SECURE_AUTH_SALT', 's_|S=4v$4zBS:|$2x}S-5IHk 1s.m^7Xx7kLX!50.-:xGiQ99}Muf]13fd-KA$r7' );
define( 'LOGGED_IN_SALT',   'TordwPYeyVGTHc:Q~h~J~(x7zCw!w*/DCl0{j,zPa<Y)0 $sf268PzQf^O<YeG{+' );
define( 'NONCE_SALT',       'UFKZRGW{^Tx1k2x`W8|}Fg=hJ$S78zMP9F%SG]l.qb*#|:$!!G*$yEZ5=%L?!M0X' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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