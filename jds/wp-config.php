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
define( 'DB_NAME', 'jds_db' );

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
define( 'AUTH_KEY',         'I`,c_,}:$Re4F2.6:GbU>9$~tlU8~|FP1G*&T.7PAKfs V>(J)Y4hb}!eQ^.Xj=j' );
define( 'SECURE_AUTH_KEY',  'Pl%$M`YA mG/%8D3 .Jd eH0E6y4fSs|YYN~Up=Go-]x#J3$AbrzU2v|gDh]|6Z_' );
define( 'LOGGED_IN_KEY',    '>999Pl)5IqtU6/cK>kZ:`<Fe*)/@fK`42YEE. cMinZntG1tN0_Ta1`qEs@A%X;G' );
define( 'NONCE_KEY',        ']8R*D0R`MWB).H/}!3? #0unjezRX(^b;!XWkFXG:z8jhwYpyReBsm7#oAc6x9|]' );
define( 'AUTH_SALT',        'p#+AcT(IIn)h)is[L6O)bkabFh}:cF_R&6j}NKu}uLONRH>70H(mY.K .eEVOAfu' );
define( 'SECURE_AUTH_SALT', '%f8qIz{$qC3tQ;|YtL70=.}Q&gCGrTgr67toE`oohntyiPH=6G2,-|<?4#UK.s{S' );
define( 'LOGGED_IN_SALT',   '`0>,DTu`s=JPg1vRLF0W-KRr^_-(`UCH8(qLn^8+)-fx[%)pIwt_NWx}ymrP=DQ]' );
define( 'NONCE_SALT',       '^+4R6c+>ICQ ;:@9;>FJ}.,p:a)3 ZaWJ&@QU*P(Hj^]T*yq$_eU* N2{hC}b|&`' );

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
$table_prefix = 'jds_';

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
