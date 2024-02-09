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
define( 'AUTH_KEY',         'BW<XwnXU5A=fm)YI9I&4?:*Cz:xAd,.A+}^;ezz#91W 6:lP_[V`THzeNf{k:iIt' );
define( 'SECURE_AUTH_KEY',  '5U>uW]mp2:B{pa>?f{9_`,Sh!:3 Wy2 y,OH|B_%i.=& 5WrIFH<E X 2o6z96Vz' );
define( 'LOGGED_IN_KEY',    '2pr2Z;x}NtB! 9[.W`Y`[$u.K3<3Vb}Yko47Cc{n$~7-X]eT<,Ke.:)]bkcvS.]4' );
define( 'NONCE_KEY',        '3EivBup,V-2~:xm8~}`|G0zC4Ns^V)evNkQ1A=bS%L!b)av-6FF*sPs$~!>%%bG6' );
define( 'AUTH_SALT',        'zne3dX97FDu}[$1cW+O61Z<ewX,vVdR=WcXw<m(UO8K^D@c-#z4@WRd(9riy/;[x' );
define( 'SECURE_AUTH_SALT', '.{,r1!L}2VVRWALw[7]z.Z^{7RU:BR-{UqCX?c;b}!f^SAk0Dj<isfUvEnCR47+_' );
define( 'LOGGED_IN_SALT',   ';,F:Z kL1nP9!ZcMsF3SQgf9j4Ff<?dJp&.zK]~Wjd1I7,uvp3;(n;Oj-AM-qQ$8' );
define( 'NONCE_SALT',       'z|g|{{@^nS[b4&C;rZ3PI+aVM0->|`d:wtlW>z?Blinq+GJdFjU+fC/4_4D/;).!' );

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
