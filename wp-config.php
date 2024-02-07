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
define( 'DB_NAME', 'Jeeva' );

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
define( 'AUTH_KEY',         'Ew|/z~Sldg-DuY<|#D;Ca.s|Vk a%o2?<a(}atjR,aR<.)~X.G]t{N}mrVmfoU| ' );
define( 'SECURE_AUTH_KEY',  'rBl[nWe :obO;H20DLb~Jz_l_^(MO3_$P~[PXO0Nm0uKBt3($eK)o)^dE(y*VHC#' );
define( 'LOGGED_IN_KEY',    '&l*xq;$x}J[@?gm^1}]C_;:o%OALyJBSF36wYhP(W/Gk>gWUtQ06sdnmU9/{D-S^' );
define( 'NONCE_KEY',        'GVD^PBG!@px}$y9g!7(cMrPXYR:rTiWL[(Q<kgn]deL7p!_;BG*+5F]-bq$ww4&V' );
define( 'AUTH_SALT',        'fU,yi]`P>x7<D/]t/.zLU*~E08X]mG[c&n2&woD_R_wvGBV kQ99AL0}k@&[NK4Y' );
define( 'SECURE_AUTH_SALT', 'HIH<~(T4R*Ut<?,Xw9K9i^||wo<gzFkoStZy;k$Hu5jvv3cmyyuL#.TSzx#hn@)W' );
define( 'LOGGED_IN_SALT',   'HfLH-{ >Bhn#HzNZZLTZP$9J3*8[+v RhQo^$Lx.}iC{(BhOrOumCZJhi=da)o~I' );
define( 'NONCE_SALT',       'hfPG!*G**{O$zxQnaKw=lsW5g[s|M_CRc;kpWh!a3I`s#f7D`<be,mU%U&|58PcV' );

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
