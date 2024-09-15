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
define( 'DB_NAME', 'db_smart' );

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
define( 'AUTH_KEY',         '$ec-$OTZLc=lyL`jV7x 6 ,BOWx+8NV*6PC0]Q>0~l@QWN0Q?La.n+-yXEl% !H[' );
define( 'SECURE_AUTH_KEY',  'Us]758*!Ko+pA@FI;^l%FH!$ET[y.vQ#Pp{`:6V)VGZEv~ikoN(`_>ctn:>u+0Xm' );
define( 'LOGGED_IN_KEY',    '-^R9u]2wk&<yP`<dy>Z83Zp/[dcBv5fUhS6S1$E>]Ao }D{87=l7{2RC/~E>JZ5r' );
define( 'NONCE_KEY',        'u@CC>{V0e:[q9DR8/kD&[HjzaCf_0Mrr(1oZ+iGrvebh/t_z#>@6@jKx(:7}=oyq' );
define( 'AUTH_SALT',        '->va],FOb`V=I2gc.|TvV s8hwTzzz]9MSF[2]dIGIowZDKB|ghm`WP1!r;,a4vA' );
define( 'SECURE_AUTH_SALT', '2j>Kwm5(VZRj!w0cC2nVH#@_?0jkslDG!&51G%mhKv$WNu/?XEW1!Wjh+_Ti+JhA' );
define( 'LOGGED_IN_SALT',   'r&a0~w*=VV;}As0^a4UQ~m!1bb*W-E,i_v9/26Cp<8`vYtH[e5C}c!6()SA@!I|Y' );
define( 'NONCE_SALT',       'AwAG9Rje*cDu|#u[TRb>(MoMHw$!pFLS(p}k>G&f>>k}+HH<*!Fsi,sR~mNf1LWs' );

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
