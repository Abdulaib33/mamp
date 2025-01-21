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
define( 'DB_NAME', 'eafc_1' );

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
define( 'AUTH_KEY',         'J{{|&}@&&A6q9ayYAf7{cmy*y<zJqQU#0/a(:*6xKjMQUt{mY2-q?k#m!_=Q i)N' );
define( 'SECURE_AUTH_KEY',  'I}L/})6+ym4_<NM!t+(/y2T`x(+ETg$q[B(,&G)5[*Ugn&AoOskp>%Ox?OTknd7D' );
define( 'LOGGED_IN_KEY',    'DxDsA:-4WA~m?:&XuO;s GcC]cPzq9#![7]1yU.U:l|:wUc,4[v/s&q``F,n;NXG' );
define( 'NONCE_KEY',        'a_#;GGy2Tm8nX3NjUg~fDm0WehxxSW#9_]jgFhh+Nr]9}?T{0Hy#=-gi4>LY@-?u' );
define( 'AUTH_SALT',        '92qsd k%lYR!I(:-|zKGlc6fLB9xEJe^[&`4-C[BZln{Ay_&FW%HFYIu`C3@rgd)' );
define( 'SECURE_AUTH_SALT', 'O]#;gxB+,$wPX_v,aF|.5tX^,:tfjh=ky^/DqrK3FIY13r.^62^)MQUmMR5h7BJ;' );
define( 'LOGGED_IN_SALT',   'OO=*3`1_D>@Z]/J06~}<C5=_I0w k+.w Oe|7{F4VvM@l%v8c+g7GOa]4,|W9^e_' );
define( 'NONCE_SALT',       'P^|Of!<m6eJNvd0k2MS7P.EID{Yrr1O31#EwcGvLE0#Ftb,Cvk-DBPni>;[%^%Z#' );

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
$table_prefix = 'wp_eafc_1';

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
