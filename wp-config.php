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
define( 'DB_NAME', 'jeeva' );

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
define( 'AUTH_KEY',         'q3VQ<})!}0~wQdj9Cwe{Dmm-3S3Icgt;i3oG!CC &s}5A#4N:R${4)>DaV2X-}u:' );
define( 'SECURE_AUTH_KEY',  '-thdagK!O+_&]ya?&hf_}I%==?viuqzX(trPc1dl{d~K.K. =$w/3h]-&!Y0W6rw' );
define( 'LOGGED_IN_KEY',    '8cIVn}.`;9+##;]qav|8D ){Oh:],lZ5XrCziGMs1dy/zT8m>{3[HYyH-2<JA%;U' );
define( 'NONCE_KEY',        '[Wn9r1_f3$$HxSgqR^WJel%A_5JmNVNrAsox-*q*ZZB` yQV[t99}I.jATQ4vQ>@' );
define( 'AUTH_SALT',        'v#gZS V8? onf-@jw=YB*}K@1H>w4ZZ&h,6!bud}k;K,?Q3e15q)p?Z:TZS`%Jie' );
define( 'SECURE_AUTH_SALT', '#:sAAh$^x<[< 1hodp<hW#8*Omd>1A9KJ/#P`[8mp#T6Z{^xfpIr&)?j_b8=O/Hq' );
define( 'LOGGED_IN_SALT',   '34{o8khYIOwipd)4,Mj*W::r0`D+~jJhM4j*nW}i5iPSHMK3S..FMG!p`;Pfu[oZ' );
define( 'NONCE_SALT',       'T e%Fy!cZKo]=$U.s2G*>rpH+@t~QA|Gzy5siEV?}`H1RZBRuyQsH.,.T<lwjC-^' );

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
