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
define( 'DB_NAME', 'summer_DB' );

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
define( 'AUTH_KEY',         'TqXA_tiN OW?fZ)A{4eu3uWUIZ3+TBr@TJS^OVwV<[qENaakkJprB?-2.xuOoDNU' );
define( 'SECURE_AUTH_KEY',  'C|XT75BnWU.jWydXqJ<@g^@ s?Lp2H]$h*~[MfkJlZ;M~0jhnziX;`Hzir@:jCS2' );
define( 'LOGGED_IN_KEY',    '|L?Y2|!bmPhH9vMW[=~na!eTze)gdU%biyg7+%IgjkdU1id%jIPSqtrPT vy`,t&' );
define( 'NONCE_KEY',        'G*2L?n6v?)0YdM_A]5`dU_1UXzNxM:OB~|1+aEP8k%pAMBDwfiifN+,Cj->,c!?E' );
define( 'AUTH_SALT',        '6pZ{>eR?+pe@_IYbj|@3|]mu?Gc~6D3047E#Jd8Q^{c0:RIW4,4~q*,rUH$fbGV?' );
define( 'SECURE_AUTH_SALT', 'mB6D! {Sb<><eU{=B$u&O w~pW#[S4W+v17=G/$a@!tKvv)rFqV[A*l<$9RuZG:t' );
define( 'LOGGED_IN_SALT',   'E`WrZun[X@bf2 JdwIOKyl?2P9D=fuqE=Q0o(?V$VTN(y6=sq9;6/d%o(bv&p6@!' );
define( 'NONCE_SALT',       'pY~w^|RCo^3k!2B>?b~X9-KAFr$S@#v7`H#:c^.u$)@Wr[6,M$ D]~}VVYId*y9c' );

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
