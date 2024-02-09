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
define( 'AUTH_KEY',         ';_7@h@E&`,0:{h$^:K,oekBOaf-!s^#dNu_?vzkmZF}^h?&e@-#o- 1-9|yb3xCu' );
define( 'SECURE_AUTH_KEY',  'mz,dPVc*Ws~z*M#hRWgM;]w|cF9 JZ^9}Z*cvTcRe47IZF~{J1Vn;TA8Nb%`fV*%' );
define( 'LOGGED_IN_KEY',    'NV%d}|U;IOdwhvR6[7a9hYa:?~&X9_?(5Gz_514;GbFWOa]{_.tCR[Bp5fl*`+Fp' );
define( 'NONCE_KEY',        ',gT/NM2Tr%~UbHzMZ6(|:)/|3~x._tFa39,J3_88L`t]jCm }q_h4{!nPGp%d3Rj' );
define( 'AUTH_SALT',        'X783*-PDYbzB9,t6Vwi/f-TMx[Cdy,}0$nNaS[.&nU9],n/}iSyu5>R2R9w>STDe' );
define( 'SECURE_AUTH_SALT', '%gR^/A5-U>P2i8G0.ZE!kn)r3ywefN~5iYNc}I+T<#X^-p[,:<y{L8J2`#8AB_UZ' );
define( 'LOGGED_IN_SALT',   'w?Z6*Z!b])Hv&X.S{P%bBuhV8,jQ`_FL%O)7z;T<sqtXva;Hzy|n>l7M;tXK5I0.' );
define( 'NONCE_SALT',       '?f4`}l|h/@&),K_Sx#W+Q]wNc2D:-cyxT,5=1uy*X<.&;`mCH^pG` a>DzrM3:~`' );

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
