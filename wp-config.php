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
define( 'DB_NAME', 'optobotix_db' );

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
define( 'AUTH_KEY',         'j4KZJY>.$qP6huM%e#N1%3I1oh!$^7S_W?Con@];Q9;)hex!1w0W@,8;I(O|</Cb' );
define( 'SECURE_AUTH_KEY',  ' %k@N4Lbj:Y)n/lQdE4*C~=J)4b7yi)Qsew`i!+K6A`cQrY_s7f={7E#i-<W*Oe#' );
define( 'LOGGED_IN_KEY',    'G%%M!A~?>EpyGCx)8?2xeR_jG44w=6B)=`7)go1RM`UTU/n/mN2j5d%t%H/VX4F/' );
define( 'NONCE_KEY',        'U7BdIuHdFDv(.k,)x@wRcOM9uUj99=u;:bs&Xc|mYLL.iB0Pdov?kb0yq?0BH.g7' );
define( 'AUTH_SALT',        'V9?#c~9|m**gK@w qR1xXgNPGcz/2[,#_L)UNZ+Xn1w}%D{pZ0zGy0^dRwO,5FC/' );
define( 'SECURE_AUTH_SALT', '0hFtNj</W5vmKiZ@&^DUcW|0w(zw%z4JW*aL.xigov-]taGwR89nG2/(2V}Z9zk;' );
define( 'LOGGED_IN_SALT',   'j ,Ib-/+dT7T,S(`,Dso?unS685@PT9>*E9r}O<+Vd{&]svzd=3]xh.X#FkYi1ZW' );
define( 'NONCE_SALT',       'q7@HaI0rsI/vpk>LKk>~tQ(|5)7GoZ9X`1r9]l_Nc@?F93cDS`!p5nR*}wLytvW|' );

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
