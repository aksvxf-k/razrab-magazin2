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
define( 'DB_NAME', 'WooCommerce' );

/** Database username */
define( 'DB_USER', 'aliska' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         '1EKg80ah0!)hg{g*}bO>S|5&e#aV~;xRE2B0(L0Oj(m/S5fntXaPM&4(cn[U0qA!' );
define( 'SECURE_AUTH_KEY',  '0nun3}43b}hTRAA:v {b*2H<ShrgmyfaCRuh{|zqka[|CpSv9,B;TSE@z6iB|_xF' );
define( 'LOGGED_IN_KEY',    'ftr+h}fxWPSgo)tMut0tKA)a/Q|PWA|sn_L``LJt)0SCln9:|XR%l?cz;yHvi*R#' );
define( 'NONCE_KEY',        '4${6]X*>8h6<z2h58<QNzDV##~;;Z7+&G i/vAR*:={@nI3=,YTI@iO~SuiL|zvk' );
define( 'AUTH_SALT',        'c*GtRziz[&xRck[t`*Q?sjP6.[$!4m/zUYDeoc!ikHP[4M|,yQ:POi=a+k0icB%;' );
define( 'SECURE_AUTH_SALT', ':e@P.[h?BYNOV,>lOC+2<*)RutgfX0o .?z6g|htf/XWtIsP}JOIaTq(@}tikA91' );
define( 'LOGGED_IN_SALT',   'shq7=m93X^W#~tp+Bgu%B#.+L!l{hSPrcsdld tZyUl92A-(^/+-P$G-;Mb(?!E3' );
define( 'NONCE_SALT',       '9X[hF}7!1:+Wx Nk36?Hq(3fn0@~.+_S0=h +m)|~f=#X-1,hrh7ZPmF3vRl!wXb' );

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
