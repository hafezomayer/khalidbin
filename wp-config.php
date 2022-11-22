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
define( 'DB_NAME', 'khalidbin' );

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
define( 'AUTH_KEY',         '4Y}/*Jd~%u}T{[y=NV]=@M*qe8M/Y/qj>[eqL>T9y>VbX$!Pr?Nw_I RuS&EPsA?' );
define( 'SECURE_AUTH_KEY',  '5bPSL(-,;U;P_P0Sqy+SGz6{;J~pak*O#i2 [~.3M&-&|{G.T~d9YAA,}*,o?7*?' );
define( 'LOGGED_IN_KEY',    'FxxCjzv&{@0lzPIP[F$f/kioUjZ;U-18/>Y(`>~@7nHk`H(c#Ecbf6uleU2Wu=;9' );
define( 'NONCE_KEY',        'aN6Bcj wxWPRkZz^}!KcD+GOwWsVK#uBtq|TAC~^,%vt(0b}Onz3a?j&0M1=z$$N' );
define( 'AUTH_SALT',        ',gJ=(yR7H-Vzx1cA7bYhm2Yg{+Kn*&#{EFXDBW%c$@+66HVOCY3SRnqz))V`;8x%' );
define( 'SECURE_AUTH_SALT', ';J4o7*u$|GBY8*#c&cv*2~UeHhCn/fY6zEI>%2m=^D6v.3vtyv{y$F9>M$!<oM5S' );
define( 'LOGGED_IN_SALT',   't72URzz*gnnJXeHvD<~?sc^ii<j[NFo#4?L7ob]t}2m|3NX7I;w6[)acSRrJw:{7' );
define( 'NONCE_SALT',       'jA7TJLJnz[N{]2YMD3_l-u{V?b@aA[?Kj$n3l1Oc5954$Fd@zV 0(ubaa+zG^{^h' );

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
